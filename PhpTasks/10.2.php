<?php

$url = 'http://php.net/releases/?json';

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
$json=curl_exec($ch);
curl_close($ch);

$json = file_get_contents($url);
$releases = json_decode($json, true);
?>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>version</th>
        <th>date</th>
        <th>source</th>
    </tr>
    <?foreach ($releases as $release):?>
        <tr>
            <td><?=$release['version']?></td>
            <td><?=$release['date']?></td>
            <td>
                <?foreach ($release['source'] as $source):?>
                    <a href="https://www.php.net/distributions/<?=$source['filename']?>"><?=$source['name']?></a>
                    <br>
                <?endforeach?>

                <?if (!empty($release['windows'])):?>
                    <?foreach ($release['windows'] as $source):?>
                        <a href="https://www.php.net/distributions/<?=$source['filename']?>"><?=$source['name']?></a>
                        <br>
                    <?endforeach?>
                <?endif?>
            </td>
        </tr>
    <?endforeach?>
</table>
