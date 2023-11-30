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

  
use PDF;
use Mail;
use App\Mail\DemoEmail;
use App\Mail\CommunityInquiry;
use App\Mail\SubscriptionInquiry;
use App\Mail\BrokerRegistration;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Client\RequestException;
use GuzzleHttp\Client;

use Response;

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


    // public function communities() {
    //     $client = new \GuzzleHttp\Client();
    //     $response = $client->get('https://jsonplaceholder.typicode.com/posts');
    //     $this->data['response'] = $response;

    //     return view('communities', $this->data);
    // }


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


    public function developments() {
        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;
        return view('developmentDetails', $this->data);
    }

    public function communities() {
        $this->data['long'] =  55.156860;
        $this->data['lat'] = 25.101131;

        return view('communities', $this->data);
    }

    public function community_details() {
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


        return view('development', $this->data);
    }


    public function projects() {

        $jsonSEOData = $this->landingpageseos(3);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();
        return view('projects', $this->data);
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


    public function invest() {
        return view('invest_in_dubai');
    }


    public function constructions() {
        $jsonSEOData = $this->landingpageseos(3);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/constructions');
        $jsonData = $response->json();
        
        // RETURN AS JSON
        // dd($jsonData);
        $this->data['response'] = $jsonData;

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        return view('constructions', $this->data);

    }


    public function news() {
        $jsonSEOData = $this->landingpageseos(3);
        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/news');
        $jsonData = $response->json();  


        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData;

        return view('news', $this->data);

    }


    public function news_details($id) {

        $jsonSEOData = $this->landingpageseos(3);

        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/news/'.$id);

        $jsonData = $response->json();  

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        // dd($jsonData);
        if(count($jsonData[0]['website_news_images']) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];

        return view('news_details', $this->data);
    }


    public function constructions_details($id) {

        $jsonSEOData = $this->landingpageseos(3);

        $this->data['jsonSEOData'] =  $jsonSEOData->json();

        // CALL API FROM MIS
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/constructions/'.$id);

        $jsonData = $response->json();  

        if(count($jsonData) > 0){
            $this->data['available'] = '1';
        }

        // dd($jsonData);
        if(count($jsonData[0]['website_construction_images']) > 0){
            $this->data['available'] = '1';
        }
        
        // RETURN AS JSON
        $this->data['response'] = $jsonData[0];

        return view('constructions_details', $this->data);
    }





    public function privacy_and_policy() {

        // $jsonSEOData = $this->landingpageseos(1);
        
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('privacy-and-policy');        
    }

    public function terms_and_conditions() {

        // dd('reached');
        
        // $jsonSEOData = $this->landingpageseos(1);
        
        // $this->data['jsonSEOData'] =  $jsonSEOData->json();

        return view('terms-and-conditions');        
    }



    public function agency_registration() {
        return view('brokers');
    }







    public function agency_registration_post(Request $request) {
        // dd($request->files);
        // foreach($request->files as $file) {
        //     dd($file);
        // }

        $data = [
            'company_name'      =>  $request->company_name, 
            'country'      =>  $request->country, 
            'trade_license'      =>  $request->trade_license, 
            'trade_license_expiry'      =>  $request->trade_license_expiry, 
            'rera_certificate'      =>  $request->rera_certificate, 
            'rera_certificate_expiry'      =>  $request->rera_certificate_expiry, 
            
            'authorized_p_name'      =>  $request->authorized_p_name, 
            'authorized_p_country'      =>  $request->authorized_p_country, 
            'authorized_p_passport'      =>  $request->authorized_p_passport, 
            'authorized_p_position'      =>  $request->authorized_p_position, 
            'authorized_p_email'      =>  $request->authorized_p_email, 
            'authorized_p_contact'      =>  $request->authorized_p_contact, 
            'authorized_p_address'      =>  $request->authorized_p_address, 
            'authorized_p_city'      =>  $request->authorized_p_city, 

            'bank_name'      =>  $request->bank_name, 
            'bank_country'      =>  $request->bank_country, 
            'bank_city'      =>  $request->bank_city, 
            'account_no'      =>  $request->account_no, 
            'iban'      =>  $request->iban, 
            'account_title'      =>  $request->account_title, 
        ];
        
        // if($request->has('power_of_atty_or_moa_id')) {
        //     $power_of_atty_or_moa_id = $request->power_of_atty_or_moa_id;
        //     $this->data['power_of_atty_or_moa_id_path'] = $power_of_atty_or_moa_id->getRealPath();
        //     $this->data['power_of_atty_or_moa_id_name'] = $power_of_atty_or_moa_id->getClientOriginalName();
        //     $this->data['power_of_atty_or_moa_id_type'] = $power_of_atty_or_moa_id->getMimeType();
        // } else {
        //     $this->data['power_of_atty_or_moa_id_path'] = null;
        //     $this->data['power_of_atty_or_moa_id_name'] = null;
        //     $this->data['power_of_atty_or_moa_id_type'] = null;
        // }
        
        // if($request->has('valid_trade_license_id')) {
        //     $valid_trade_license_id = $request->valid_trade_license_id;
        //     $this->data['valid_trade_license_id_path'] = $valid_trade_license_id->getRealPath();
        //     $this->data['valid_trade_license_id_name'] = $valid_trade_license_id->getClientOriginalName();
        //     $this->data['valid_trade_license_id_type'] = $valid_trade_license_id->getMimeType();
        // } else {
        //     $this->data['valid_trade_license_id_path'] = null;
        //     $this->data['valid_trade_license_id_name'] = null;
        //     $this->data['valid_trade_license_id_type'] = null;
        // }
        
        // if($request->has('rera_certificate_id')) {
        //     $valid_trade_license_id = $request->rera_certificate_id;
        //     $this->data['rera_certificate_id_path'] = $rera_certificate_id->getRealPath();
        //     $this->data['rera_certificate_id_name'] = $rera_certificate_id->getClientOriginalName();
        //     $this->data['rera_certificate_id_type'] = $rera_certificate_id->getMimeType();
        // } else {
        //     $this->data['rera_certificate_id_path'] = null;
        //     $this->data['rera_certificate_id_name'] = null;
        //     $this->data['rera_certificate_id_type'] = null;
        // }
        
        // if($request->has('broker_card_id')) {
        //     $valid_trade_license_id = $request->broker_card_id;
        //     $this->data['broker_card_id_path'] = $broker_card_id->getRealPath();
        //     $this->data['broker_card_id_name'] = $broker_card_id->getClientOriginalName();
        //     $this->data['broker_card_id_type'] = $broker_card_id->getMimeType();
        // } else {
        //     $this->data['broker_card_id_path'] = null;
        //     $this->data['broker_card_id_name'] = null;
        //     $this->data['broker_card_id_type'] = null;
        // }
        
        // if($request->has('valid_vat_certificate_or_noc_id')) {
        //     $valid_trade_license_id = $request->valid_vat_certificate_or_noc_id;
        //     $this->data['valid_vat_certificate_or_noc_id_path'] = $valid_vat_certificate_or_noc_id->getRealPath();
        //     $this->data['valid_vat_certificate_or_noc_id_name'] = $valid_vat_certificate_or_noc_id->getClientOriginalName();
        //     $this->data['valid_vat_certificate_or_noc_id_type'] = $valid_vat_certificate_or_noc_id->getMimeType();
        // } else {
        //     $this->data['valid_vat_certificate_or_noc_id_path'] = null;
        //     $this->data['valid_vat_certificate_or_noc_id_name'] = null;
        //     $this->data['valid_vat_certificate_or_noc_id_type'] = null;
        // }
        
        // if($request->has('passport_visa_eid_id')) {
        //     $valid_trade_license_id = $request->passport_visa_eid_id;
        //     $this->data['passport_visa_eid_id_path'] = $passport_visa_eid_id->getRealPath();
        //     $this->data['passport_visa_eid_id_name'] = $passport_visa_eid_id->getClientOriginalName();
        //     $this->data['passport_visa_eid_id_type'] = $passport_visa_eid_id->getMimeType();
        // } else {
        //     $this->data['passport_visa_eid_id_path'] = null;
        //     $this->data['passport_visa_eid_id_name'] = null;
        //     $this->data['passport_visa_eid_id_type'] = null;
        // }


        try{
            $pdf = PDF::loadView('emails.pdf.brokerReg', $data);
            $pdf->getDomPDF()->getCanvas()->get_cpdf()->setEncryption("viewer_password", "admin_password");

            Mail::mailer('noreply')->send('emails.brokerReg', $data, function($message)use($data, $pdf, $request) {
                    $first_segment = $message->to("webmaster@esnaad.com")
                        ->subject("ESNAAD Notification - Broker Registration")
                        ->attachData($pdf->output(), "text.pdf");
                    
                    foreach($request->files as $file) {
                        $first_segment->attach($file->getRealPath(), [
                            'as' => $file->getClientOriginalName(),
                            'mime' => $file->getMimeType(),
                        ]);
                    }
                    
                }
            );

            // foreach ($request->files as $file) {
            //     $email->attachData($file, $file->getClientOriginalName());
                
            //     attach($file->getRealPath(), array(
            // 		'as' => $file->getClientOriginalName(),           // If you want you can chnage original name to custom name
            // 		'mime' => $file->getMimeType())
            // 	);
            // };

            // if($email) {
            //     return Response::json(['success' => 'success'], 200);
            // }

        } catch (\Exception $e) {   
            dd($e->getMessage());
        }




        // $data["email"] = "webmaster@esnaad.com";
        // $data["title"] = "From ESNAAD";
        // $data["body"] = "This is Demo";
  
        // $pdf = PDF::loadView('emails.brokerReg', $data);
        // $pdf->getDomPDF()->getCanvas()->get_cpdf()->setEncryption("viewer_password", "admin_password");

        // Mail::mailer('noreply')->send('emails.myTestMail', $data, function($message)use($data, $pdf) {
        //     $message->to($data["email"], $data["email"])
        //             ->subject($data["title"])
        //             ->attachData($pdf->output(), "text.pdf");
        // });


        // dd($request->files);

        

        // dd($valid_trade_license_id);

        // try{
        //     $data = [
        //         'company_name'      =>  $request->company_name, 
        //         'country'      =>  $request->country, 
        //         'trade_license'      =>  $request->trade_license, 
        //         'trade_license_expiry'      =>  $request->trade_license_expiry, 
        //         'rera_certificate'      =>  $request->rera_certificate, 
        //         'rera_certificate_expiry'      =>  $request->rera_certificate_expiry, 
                
        //         'authorized_p_name'      =>  $request->authorized_p_name, 
        //         'authorized_p_country'      =>  $request->authorized_p_country, 
        //         'authorized_p_passport'      =>  $request->authorized_p_passport, 
        //         'authorized_p_position'      =>  $request->authorized_p_position, 
        //         'authorized_p_email'      =>  $request->authorized_p_email, 
        //         'authorized_p_contact'      =>  $request->authorized_p_contact, 
        //         'authorized_p_address'      =>  $request->authorized_p_address, 
        //         'authorized_p_city'      =>  $request->authorized_p_city, 

        //         'bank_name'      =>  $request->bank_name, 
        //         'bank_country'      =>  $request->bank_country, 
        //         'bank_city'      =>  $request->bank_city, 
        //         'account_no'      =>  $request->account_no, 
        //         'iban'      =>  $request->iban, 
        //         'account_title'      =>  $request->account_title, 

        //         'power_of_atty_or_moa_id_path'      =>  $power_of_atty_or_moa_id->getRealPath(), 
        //         'power_of_atty_or_moa_id_name'      =>  $power_of_atty_or_moa_id->getClientOriginalName(), 
        //         'power_of_atty_or_moa_id_type'      =>  $power_of_atty_or_moa_id->getMimeType(), 

        //         'valid_trade_license_id_path'      =>  $valid_trade_license_id->getRealPath(), 
        //         'valid_trade_license_id_name'      =>  $valid_trade_license_id->getClientOriginalName(), 
        //         'valid_trade_license_id_type'      =>  $valid_trade_license_id->getMimeType(), 

        //         'rera_certificate_id_path'      =>  $rera_certificate_id->getRealPath(), 
        //         'rera_certificate_id_name'      =>  $rera_certificate_id->getClientOriginalName(), 
        //         'rera_certificate_id_type'      =>  $rera_certificate_id->getMimeType(), 

        //         'broker_card_id_path'      =>  $broker_card_id->getRealPath(), 
        //         'broker_card_id_name'      =>  $broker_card_id->getClientOriginalName(), 
        //         'broker_card_id_type'      =>  $broker_card_id->getMimeType(), 

        //         'valid_vat_certificate_or_noc_id_path'      =>  $valid_vat_certificate_or_noc_id->getRealPath(), 
        //         'valid_vat_certificate_or_noc_id_name'      =>  $valid_vat_certificate_or_noc_id->getClientOriginalName(), 
        //         'valid_vat_certificate_or_noc_id_type'      =>  $valid_vat_certificate_or_noc_id->getMimeType(), 

        //         'passport_visa_eid_id_path'      =>  $passport_visa_eid_id->getRealPath(), 
        //         'passport_visa_eid_id_name'      =>  $passport_visa_eid_id->getClientOriginalName(), 
        //         'passport_visa_eid_id_type'      =>  $passport_visa_eid_id->getMimeType(), 
        //     ];

        //     Mail::mailer('noreply')
        //         ->to('webmaster@esnaad.com')
        //         ->send(new BrokerRegistration($data));

        // } catch (\Exception $e) {   
        //     dd($e->getMessage());
        // }

        // return Response::json(['success' => 'success'], 200);


        // \Mail::send('email/career_email',
        // array(
        //     'name' => $request->get('authorized_p_name'),
            

        // ), function($message) use ($request)
        //   {

		// 	 $message->to('webmaster@esnaad.com')->subject('Broker Registration');
		// 	 $message->attach($request->power_of_atty_or_moa_id->getRealPath(), array(
		// 		'as' => $request->power_of_atty_or_moa_id->getClientOriginalName(),           // If you want you can chnage original name to custom name
		// 		'mime' => $request->power_of_atty_or_moa_id->getMimeType())
		// 	);



        // });

        // \Mail::send('email/user_email',
        // array(

        // ), function($message) use ($request)
        //   {

        //      $message->to($request->email)->subject('Edge Realty Registration');
        //   });

        return Response::json(['success' => 'success'], 200);

    }



    public function subscription_form(Request $request) {
        
        try{
            $data = [
                'name'      =>  $request->name, 
                'email'     =>  $request->email,
                'ip'     =>  $request->ip_address
            ];

            // Mail::to('lead@edgerealty.ae')->send(new DemoEmail($mailData));
            Mail::mailer('noreply')->to('lead@esnaad.com')->send(new SubscriptionInquiry($data));
            Mail::mailer('noreply')->to('webmaster@esnaad.com')->send(new SubscriptionInquiry($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        

        try{
            // $formData = [
            //     'headers' => [
            //         'Content-Type' => 'application/json',
            //         'X-CSRF-TOKEN' => csrf_token(),
            //         'authkey' => 'YOUR_SECRET_KEY',
            //     ],
            //     'body' => json_encode([
            //         'name' => $request->name,
            //         'email' => $request->email,
            //         // Add other form fields as needed
            //     ]),
            // ];
            
            // // API endpoint on another domain
            // $apiEndpoint = 'https://mis.esnaad.com/api/v1/esnaad/email-subscription';

            // // Send a POST request to the API
            // $response = Http::post($apiEndpoint, $formData);

            // // Check the response
            // if ($response->successful()) {
            //     // The request was successful
            //     return response()->json(['message' => 'Form submitted successfully']);
            // } else {
            //     // Handle errors
            //     dd($response->body());
            //     return response()->json(['error' => 'Error submitting form'], $response->status());
            // }

            

            $data = [

                'name' => $request->name,
                'email' => $request->email,
            ];


            $curl = curl_init();

            $url = 'https://mis.esnaad.com/api/email-subscription-v3';

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,    
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'Cookie: XSRF-TOKEN=eyJpdiI6ImdjVUpXbDhCbk9BSGFWOTZsTTZSL0E9PSIsInZhbHVlIjoiUUJrWTlWOVVnb00zWDhzVk1kQTBTWWNYcHlvZXA0OXpEMWVVREUyTlZXR3Z2dkNMSlZZb1JMK3ppNjROazMzYlczalc0NHVBKzZ6WWhPYTloT3d4UmI0U0ptZUR6S0JsbmRrdlZzSThQSVNOUi90WGw0WkRhYXpTUFVIQXZGS0wiLCJtYWMiOiIxMTA2OWI1ZmZjMjZiY2I5ZGRjZWQyNmIwNGY1ZTRmMjgwNTk5YWFmODE1YzU4ODg3MWNmN2ViZTkzNjg4ODEzIiwidGFnIjoiIn0%3D'
                ),
            ));

            $response = curl_exec($curl);

            if ($response === false) {
                $error = curl_error($curl);
                $errno = curl_errno($curl);

                echo "Error: " . $error . " (Error code: " . $errno . ")";
            } else {
                // Process successful response
                echo $response;
            }

            curl_close($curl);

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        
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
