<?php
$whmusername = "root";
$whmhash = "6df2d9b32d3a01f108024f3b56e3d1f3
e21901f84fb9906c9b169a72dc273271
0fc9a32165f3342a69a7baa0c82b99c9
c946012ccdc30e30dd0a32392ad4339d
e9773b7c3fece7195667b361cc5d1f10
617e9bb918ae9f5e97535bc6b1f0cd1a
09a69bc515596ea5f64d3c89201641da
dfb1bd00707cc2447a701e75212363dc
e22b781478940a67a7c707e724f5b87e
4251a18c010b05061730ed54199257c1
ab0e4d4f0c5170af1e7fa27595ce1c42
30c204db1cd2b817fa8c9ecae69d4bd8
a47a90de6db47bf9a7685bb54303b7b2
ad17d3d747aff51dd006d6a6aa4d2bc2
6cd3f92a397b1f03c432b3d3f2e41307
d4fa2823ea6569dbd572d747d9d28b99
b9f42e1e8ea466a1e21944da77237544
2a32fdb2d2f8eef21545150b6a6366e4
7e92d162b135b5435d868ca0b53e0c81
7eb20b942aa3b360f74f9fcc3cb9d5b5
86c18d57fc5d1d812dc9f7357ae2e3a1
c207dbfb5f8a9a4bd63b566937c748b0
9e4a2e870017404a05539c04aaf0c948
707c51e22df04a5be7516a4622c9cb70
f2b966d350fa29b4cbcecb4a88d3a59d
a45d5e866459ef9974e0bd517e5d343f
209a46d07242082c1455ca28e0705f5d
61d1f1f24bde65993d47193d156faefa
91598887c6b042a2968f35830b7ddccb";
# some hash value


$query = "https://breezego.com:2087/json-api/listaccts";

$curl = curl_init();
# Create Curl Object
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
# Allow certs that do not match the domain
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
# Allow self-signed certs
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
# Return contents of transfer on curl_exec
$header[0] = "Authorization: WHM $whmusername:" . preg_replace("'(\r|\n)'","",$whmhash);
# Remove newlines from the hash
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
# Set curl header
curl_setopt($curl, CURLOPT_URL, $query);
# Set your URL
$result = curl_exec($curl);
# Execute Query, assign to $result
if ($result == false) {
    error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
}
curl_close($curl);

echo "<pre>".print_r(json_decode($result),true);


?>