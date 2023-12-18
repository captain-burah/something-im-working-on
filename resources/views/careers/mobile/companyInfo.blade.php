<div class="grid grid-cols-1 gap-4">
    <div class="mt-4 underline text-xl">
        Company Information
    </div>

    <div>
        <td>Company Name</td>
        <td class="w-full"><input type="text" name="company_name" id="company_name" placeholder="Company Name" class="w-full"></td>
    </div>
    
    <div>
        <td>Company Type</td>
        <td class="w-full">
            <select id="countries" name="bank_country" class="w-full">
                <option value="">Choose</option>
                <option value="Limited Liability Company (LLC)">Limited Liability Company (LLC)</option>
                <option value="Partnerships">Partnerships</option>
                <option value="Sole Proprietorship">Sole Proprietorship</option>
                <option value="Public Joint Stock Company">Public Joint Stock Company (PSJC)</option>
                <option value="Free Zone Company">Free Zone Company</option>
                <option value="Offshore Company">Offshore Company</option>
            </select>
        </td>
    </div>
    
    <div>
        <td>Trade License Number</td>
        <td><input type="text" name="trade_license" id="trade_license" placeholder="Trade License Number" class=" w-full"></td>
    </div>

    <div>
        <td>Trade Licencse Expiry</td>
        <td><input type="date" name="trade_license_expiry" id="trade_license_expiry" min="2024-01-01" class=" w-full"></td>
    </div>

    <div>
        <td>RERA Certificate Number</td>
        <td><input type="text" name="rera_certificate" id="rera_certificate" placeholder="ex: 123456" class="w-full"></td>
    </div>

    <div>
        <td>RERA Certificate Expiry</td>
        <td><input type="date" name="rera_certificate_expiry" id="rera_certificate_expiry" min="2024-01-01" class=" w-full"></td>
    </div>
</div>
