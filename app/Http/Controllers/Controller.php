<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function whmcs($action, $client_id, $pid)
    {
        $whmcsUrl = "https://portal.uninet.net.id/";

        // For WHMCS 7.2 and later, we recommend using an API Authentication Credential pair.
        // Learn more at http://docs.whmcs.com/API_Authentication_Credentials
        // Prior to WHMCS 7.2, an admin username and md5 hash of the admin password may be used.
        $username = "cQNqa9jVPmLvSt9l9eKp5mdTIKqyWqpK";
        $password = "CVdhf3HJT8JsaOAzmsjNnPexa7CDe6aQ";

        // Set post values
        $postfields = array(
            'username'      => $username,
            'password'      => $password,
            'action'        => $action,
            'clientid'      => $client_id,
            'pid'           => $pid,
            'stats'         => true,
            'responsetype'  => 'json',
        );

        // Call the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
        $response = curl_exec($ch);
        if (curl_error($ch)) {
            die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        curl_close($ch);
        

        // Decode response
        return json_decode($response, false);
    }
}
