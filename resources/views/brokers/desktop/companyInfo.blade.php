<table class="w-full">
    <tbody>
        <caption class="my-4 underline">
            Company Information
        </caption>
        <tr>
            <td style="width: 235px">Company Name</td>
            <td><input type="text" name="company_name" id="company_name" placeholder="Company Name" class=" w-full" required></td>
        </tr>

        <tr>
            <td style="width: 235px">Company Type</td>
            <td>
                <select id="company_type" name="company_type" class="w-full" required>
                    <option value="">Choose</option>
                    <option value="Limited Liability Company (LLC)">Limited Liability Company (LLC)</option>
                    <option value="Partnerships">Partnerships</option>
                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                    <option value="Public Joint Stock Company">Public Joint Stock Company (PSJC)</option>
                    <option value="Free Zone Company">Free Zone Company</option>
                    <option value="Offshore Company">Offshore Company</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Trade License Number</td>
            <td><input type="text" name="trade_license" id="trade_license" placeholder="Trade License Number" class=" w-full" required></td>
        </tr>


        <tr>
            <td>Trade Licencse Expiry</td>
            <td><input type="date" name="trade_license_expiry" id="trade_license_expiry" min="2024-01-01" class=" w-full" required></td>
        </tr>

        <tr>
            <td>RERA Certificate Number</td>
            <td><input type="text" name="rera_certificate" id="rera_certificate" placeholder="ex: 123456" class="w-full" required></td>
        </tr>

        <tr>
            <td>RERA Certificate Expiry</td>
            <td><input type="date" name="rera_certificate_expiry" id="rera_certificate_expiry" min="2024-01-01" class=" w-full" required></td>
        </tr>
    </tbody>
</table>