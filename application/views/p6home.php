<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Web Enterprise 2 <?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="ui top menu">
        <div class="ui container">
            <a class="<?=(($title=='Home')?"active":"")?> item" href="/codeigniter/index.php/p6">HOME</a>
            <a class="<?=(($title=='FORM')?"active":"")?> item" href="/codeigniter/index.php/p6/form">FORM</a>
            <a class="item" href="/codeigniter/p7/logout">LOGOUT</a>
        </div>
    </div>
    <div class="pusher">
        <div class="ui two column grid">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <?= form_open("/p6/", array("class" => "ui form", "method" => "get")) ?>
                <div class="ui two column grid">
                    <div class="four wide column">
                        <?= form_input( array("name" => "keyword", "class" => "ui input large", "value" => $keyword = "" ) ) ?>
                    </div>
                    <div class="two wide column">
                        <?= form_submit('submit', 'Search', array("class" => "ui primary button")) ?>
                    </div>
                </div>
                <?= form_close() ?>
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Profile Picture</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th> 
                            <th>Options</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php
                            foreach ($contacts as $data){
                        ?>
                        <tr>
                            <td data-label="Picture">
                                <img src="/codeigniter/assets/<?=$data->picture?>" alt="<?=$data->name?>">
                            </td>
                            <td data-label="Name"><?=$data->name?></td>
                            <td data-label="Address"><?=$data->address?></td>
                            <td data-label="Phone"><?=$data->phone?></td>
                            <td data-label="Options">
                                <a class="ui button" href="/codeigniter/p6/form/<?=$data->id?>">
                                    <i class="edit icon"></i>
                                    Edit
                                </a>
                                <a class="ui red button" href="/codeigniter/p7/delete/<?=$data->id?>">
                                    <i class="trash icon"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>