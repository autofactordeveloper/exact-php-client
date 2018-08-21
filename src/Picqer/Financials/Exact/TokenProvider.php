<?php
/**
 * Created by PhpStorm.
 * User: ffogarasi
 * Date: 8/21/18
 * Time: 12:53 PM
 */

namespace Picqer\Financials\Exact;


interface TokenProvider
{
    public function getAccessToken();
    public function getRefreshToken();
    public function getAuthorizationCode();
}