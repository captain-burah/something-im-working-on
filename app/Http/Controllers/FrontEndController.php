<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\Category;
use App\Models\Type;
use App\Models\Agents;
use App\Models\Location;
use App\Models\City;
use App\Models\Bed;
use App\Models\Blog;
use App\Models\Bath;
use App\Models\Project;
use App\Models\Community;
use App\Models\Communities_image;
use App\Models\PropertyLocation;
use App\Models\Properties_image;
use App\Models\ProjectType;
use App\Models\Banner;
use App\Models\Developer;
use App\Models\Developer_image;
use App\Models\Features;
use App\Models\Project_status;
use App\Models\Life_style;
use App\Models\Facilities;
use App\Models\Project_document;
use App\Models\Project_image;
use App\Models\ProjectLocation;
use App\Models\Landingpageseos;

use Mail;
use App\Mail\DemoEmail;
use App\Mail\CommunityInquiry;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class FrontEndController extends Controller
{


    /**
     *
     * NOTICE
     * =======
     *
     * THESE VARIABLE NAMES ARE TAKEN FOR FOOTER OF ALL PAGES - DO NOT ATTEMPT TO RECREATE THESE
     *
     *
     *      footer_communities
     *      footer_developers
     *      footer_new_projects
     *      footer_ready_projects
     *
     */

    public function footer() {

        $this->data['footer_communities'] = Community::select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_developers'] = Developer::select('id', 'slug_link', 'name_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_new_projects'] = Project::where('pro_status', '1')->select('id', 'slug_link', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_ready_projects'] = Project::with(['project_types'])->where('pro_status', '2')->select('id', 'slug_link', 'sub_type_id', 'title_en')->orderBy('id', 'DESC')->take(6)->get();

        $this->data['footer_ready_properties'] = Property::with(['images', 'property_category', 'locationss','cityss'])->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->take(6)->get();

        return $this->data;
    }


    private function landingpageseos($id) {

        // $this->data['landingpageseo'] = Landingpageseos::select('id', 'meta_title_en', 'meta_description_en', 'meta_keywords_en')->findorFail($id);
        
       $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/seo/'.$id);

        return $response;
    }


    public function project_map_individually($id, $properties) {

        $original_data = json_decode($properties, JSON_PRETTY_PRINT);

        if($properties[0]->property_locations == null)
        {
            $long = null;
            $lat = null;
        } else {
            $long = $properties[0]->property_locations->longitude;

            $lat = $properties[0]->property_locations->latitude;
        }

        $this->data['long'] = $long;

        $this->data['lat'] = $lat;

        return $this->data;
    }

    public function property_map_individually($id, $properties) {

        $original_data = json_decode($properties, JSON_PRETTY_PRINT);

        if($properties[0]->property_locations == null)
        {
            $long = null;
            $lat = null;
        } else {
            $long = $properties[0]->property_locations->longitude;

            $lat = $properties[0]->property_locations->latitude;
        }

        $this->data['long'] = $long;

        $this->data['lat'] = $lat;

        return $this->data;
    }



    public function home() {

        $jsonSEOData = $this->landingpageseos(1);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('welcome3', $this->data);
    }


    public function communities() {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/posts');
        $this->data['response'] = $response;

        return view('communities', $this->data);
    }


    public function communities_details($slug)
    {

        $jsonSEOData = $this->landingpageseos(3);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/communities-details/'.$slug);
        $jsonData = $response->json();  
        
        // RETURN AS JSON
        // dd($jsonData);
        $this->data['response'] = $jsonData;

        // RETURN MAP DATA SEPARATELY
        // $this->data['long'] = $jsonData[0]['longitude'];
        // $this->data['lat'] = $jsonData[0]['latitude'];

        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;

        return view('communityDetails', $this->data);
    }


    public function developments_details($slug)
    {

        // CALL API FROM MIS
        // $response = Http::withHeaders([
        //     'authkey' => 'YOUR_SECRET_KEY'
        // ])->get('www.mis.esnaad.com/public/index.php/api/v1/esnaad/developments-details/'.$slug);
        // $jsonData = $response->json();  
        
        // RETURN AS JSON
        // dd($jsonData);
        // $this->data['response'] = $jsonData;

        // RETURN MAP DATA SEPARATELY
        // $this->data['long'] = $jsonData[0]['longitude'];
        // $this->data['lat'] = $jsonData[0]['latitude'];

        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;


        return view('developmentDetails', $this->data);
    }


    public function communities_registration(Request $request)
    {
        // dd($request);
        try{
            $data = [
                'name'      =>  $request->name, 
                'email'     =>  $request->email, 
                'phone'     =>  $request->phone,
                'country_code'   =>  $request->country_code
            ];

            // Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
            Mail::to('web@edgerealty.ae')->send(new CommunityInquiry($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return view('thankyou');
    }


    public function about() {
        $this->data['long'] =  55.265547;
        $this->data['lat'] = 25.206984;
        return view('about', $this->data);
    }

    public function contact() {
        return view('contact');
    }


    public function invest_in_dubai() {
        return view('contact');
    }
























    public function buy() {

        $this->footer();

        $this->landingpageseos(10);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        $this->data['property_to_be_shown'] = 'all';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }


    public function new_projects() {

        $this->footer();

        $this->landingpageseos(11);

        /**
         * NOTE
         *
         * THE FOLLOWING CODE CONTAINS A MORE OPTIMIZED DATA GATHERING TECHNIQUE
         * ALONG WITH RELATIONSHIPS BY REMOVING REDUNDANT DATA.
         *
         * HENCE, AVOID CHANGING IT TO THE CASUAL METHOD OF RETRIEVING DATA
         * FROM A DATABASE.
         *
         */
        $properties = Project::with(
            [
                'images',
                'locationss' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'project_types' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'developer' => function ($query)
                {
                    $query->select('name_en', 'id');
                },

            ]
        )->where('pro_status', '1')->select('id', 'slug_link', 'sub_type_id', 'agent_id', 'location', 'project_price', 'title_en', 'est_completion_en', 'pro_status')->orderby('id', 'desc')->paginate(12);

        $this->data['properties'] = $properties;

        return view('new-project', $this->data);
    }



    public function dubai_developers() {

        $this->footer();

        $this->landingpageseos(13);

        $properties = Developer::select(['name_en', 'slug_link', 'id', 'image'])->where('status', '1')->orderBy('name_en')->paginate(16);

        $this->data['property_to_be_shown'] = 'all';

        $this->data['properties'] = $properties;

        return view('developer', $this->data);
    }


    public function blogs() {

        $blogs = Blog::select(['name_en', 'id', 'slug_link', 'image_url', 'updated_at'])->orderby('id', 'desc')->paginate(13);

        $last_blog = Blog::select(['name_en', 'id', 'slug_link', 'image_url', 'updated_at'])->orderBy('id', 'desc')->first();

        $this->data['last_blog'] = $last_blog;

        $this->data['blogs'] = $blogs;

        $this->footer();

        $this->landingpageseos(15);

        return view('blog', $this->data);
    }


    public function blog_details($month, $data, $slug) {

        // dd('blog details');

        $blogs = Blog::select(['name_en', 'id', 'slug_link', 'image_url', 'updated_at', 'description_en', 'meta_title_en', 'meta_keywords_en', 'meta_description_en'])->where('slug_link', $slug)->orderby('id', 'desc')->get();

        $this->data['properties'] = $blogs[0];

        $this->footer();

        return view('blogDetails', $this->data);

    }








    public function new_projects_details($slug) {

        $this->footer();

        /**
         * NOTE
         *
         * THE FOLLOWING CODE CONTAINS A MORE OPTIMIZED DATA GATHERING TECHNIQUE
         * ALONG WITH RELATIONSHIPS BY REMOVING REDUNDANT DATA.
         *
         * HENCE, AVOID CHANGING IT TO THE CASUAL METHOD OF RETRIEVING DATA
         * FROM A DATABASE.
         *
         */
        $properties = Project::with(
            [
                'images',
                'project_locations',
                'communities' => function ($query)
                {
                    $query->select('description_en', 'id');
                },
                'locationss' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'project_types' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'developer' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
            ]
        )->where('slug_link', $slug)->select(
            'id',
            'slug_link',
            'sub_type_id',
            'agent_id',
            'location',
            'project_price',
            'community_id',
            'title_en',
            'est_completion_en',
            'pro_status',
            'bedrooms',
            'description_en',
            'community_en',
            'address_en', 'meta_title_en', 'meta_keywords_en', 'meta_description_en'
        )->orderby('id', 'desc')->get();

        $property_id = $properties[0]->id;

        // dd($properties[0]->project_locations);


        // SIMILAR PROJECTS
        $similar_properties = Project::with(
            [
                'images',
                'locationss' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'project_types' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'developer' => function ($query)
                {
                    $query->select('name_en', 'id');
                },

            ]
        )->where('pro_status', '1')->where('location', $properties[0]->location)->where('id', '!=', $properties[0]->id)->select('id', 'slug_link', 'sub_type_id', 'agent_id', 'location', 'project_price', 'title_en', 'est_completion_en', 'pro_status')->orderby('id', 'desc')->paginate(4);
        // SIMILAR PROJECTS

        $images = Project_image::where('project_id', $property_id)->get();

        $this->data['properties'] = $properties[0];

        $this->data['similar_properties'] = $similar_properties;

        $this->data['images'] = $images;

        $this->project_map_individually($properties[0]->id, $properties);

        return view('new-project_detail', $this->data);
    }




    public function buy_ready_villas() {
        $this->footer();

        $this->landingpageseos(8);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '2')->where('cat_id', '2')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_ready_apartments() {
        $this->footer();

        $this->landingpageseos(9);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '2')->where('cat_id', '1')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        $this->data['property_to_be_shown'] = 'appartment';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_ready_townhouses() {
        $this->footer();

        $this->landingpageseos(7);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '2')->where('cat_id', '8')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        $this->data['property_to_be_shown'] = 'townhouse';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_offplan_villas() {
        $this->footer();

        $this->landingpageseos(5);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '1')->where('cat_id', '2')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_offplan_apartments() {
        $this->footer();

        $this->landingpageseos(4);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '1')->where('cat_id', '1')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        $this->data['property_to_be_shown'] = 'appartment';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_offplan_townhouses() {
        $this->footer();

        $this->landingpageseos(6);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '1')->where('cat_id', '8')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        $this->data['property_to_be_shown'] = 'townhouse';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }



    public function buy_details($slug) {

        $this->footer();

        /**
         * NOTE
         *
         * THE FOLLOWING CODE CONTAINS A MORE OPTIMIZED DATA GATHERING TECHNIQUE
         * ALONG WITH RELATIONSHIPS BY REMOVING REDUNDANT DATA.
         *
         * HENCE, AVOID CHANGING IT TO THE CASUAL METHOD OF RETRIEVING DATA
         * FROM A DATABASE.
         *
         */

        $properties = Property::with(
            [
                'property_category' => function($query)
                {
                    $query->select('cat_name_en', 'id');
                },
                'locationss' => function ($query)
                {
                    $query->select('title_en', 'id', 'description_en');
                },
                'property_locations',

                'agentss' =>function($query)
                {
                    $query->select('slug_link', 'name_en', 'designation_en', 'language_en', 'description_en', 'phone', 'email', 'image');
                },
            ]
        )->where('slug_link', $slug)->select(
            'id',
            'slug_link',
            'title_en',
            'agent_id',
            'location',
            'price',
            'bedrooms',
            'bathrooms',
            'parking',
            'permit_no',
            'reference_no',
            'description_en',
            'property_release', 'meta_title_en', 'meta_keywords_en', 'meta_description_en'
        )->where('slug_link', $slug)->orderby('id', 'desc')->get();

        $property_id = $properties[0]->id;

        // SIMILAR PROJECTS
            $similar_properties = Property::with(['images', 'property_category', 'locationss','cityss'])->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->where('id', '!=', $properties[0]->id)->where('location', $properties[0]->location)->orderby('id', 'desc')->paginate(4);
        // SIMILAR PROJECTS

        $images = Properties_image::where('property_id', $property_id)->get();

        // dd($properties[0]->id);

        // dd($images);

        $this->data['properties'] = $properties[0];

        $this->data['similar_properties'] = $similar_properties;

        $this->data['images'] = $images;

        $this->property_map_individually($properties[0]->id, $properties);

        return view('buy-details', $this->data);
    }



    public function dubai_developers_details($slug) {

        $this->footer();

        $developer = Developer::with(['images'])->select(['name_en', 'slug_link', 'id', 'image', 'description_en', 'meta_title_en', 'meta_keywords_en', 'meta_description_en'])->where('slug_link', $slug)->get();

        $projects = Project::with(
            [
                'images',

                'locationss' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'project_types' => function ($query)
                {
                    $query->select('name_en', 'id');
                },
                'developer' => function ($query)
                {
                    $query->select('name_en', 'id');
                },

            ]
        )->select('id', 'slug_link', 'sub_type_id', 'agent_id', 'location', 'project_price', 'title_en', 'est_completion_en', 'pro_status')->where('agent_id', $developer[0]->id)->orderby('id', 'desc')->get();


        $image = Developer_image::where('developer_id', $developer[0]->id)->get();

        $this->data['properties'] = $developer[0];

        $this->data['images'] = $image;

        $this->data['projects'] = $projects;

        return view('developerDetails', $this->data);
    }








    public function buy_villas() {
        $this->footer();

        $this->landingpageseos(2);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('cat_id', '2')->where('cat_id', '2')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }


    public function buy_apartments() {
        $this->footer();

        $this->landingpageseos(1);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('cat_id', '1')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }


    public function buy_townhouses() {
        $this->footer();

        $this->landingpageseos(3);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('cat_id', '8')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }


    public function buy_offplan_properties() {
        $this->footer();

        $this->landingpageseos(17);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '1')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }


    public function buy_ready_properties() {
        $this->footer();

        $this->landingpageseos(16);

        $properties = Property::with(['images', 'property_category', 'locationss','cityss'])->where('property_release', '2')->select('id', 'slug_link', 'cat_id', 'location', 'location_str', 'price', 'title_en', 'bedrooms', 'bathrooms', 'area', 'property_release')->orderby('id', 'desc')->paginate(12);

        // dd($properties);

        $this->data['property_to_be_shown'] = 'villa';

        $this->data['properties'] = $properties;

        return view('buy', $this->data);
    }

}
