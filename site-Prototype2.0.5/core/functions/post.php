<?php 
    function item_data($num){
        $data = mysql_query("SELECT * FROM posts WHERE post_id = $num;");
        
        while($dbContentArr = mysql_fetch_array($data))
        {
           print(
               
               "<br><div class=\"container\">
                        <div class=\"col s5 center\">
                            <br>
                            <br>
                            <div class=\"card-panel\">
                                <h5> $dbContentArr[title] </h5></div>
                        </div>
                        <!-- First Row -->
                        <div class=\"row\">

                            <div class=\"col s12 m8\">
                                <div class=\"card medium\">
                                    <div class=\"card-image\">
                                        <img src='$dbContentArr[image_reference_url]'>
                                    </div>
                                    <div class=\"card-content\">
                                        <span class=\"card-title activator grey-text text-darken-4\"> <center> <div class = \"row center\"><a href=\"./buy.php?id=$dbContentArr[post_id]\" id=\"buy-btn\" class=\"btn-large waves-effect waves-light white black-text lighten-1\">Buy</a> 
            <a href=\"#\" id=\"offer-btn\" class=\"btn-large waves-effect waves-light  white  black-text lighten-1\" onclick=\"return offerBtn();\">Offer</a> </div> </center></span>
            <form id=\"offerForm\" method=\"POST\">
                <input type=\"hidden\" name=\"currentOffer\" id=\"offerPrice\" />
                <input type=\"hidden\" name=\"postId\" id=\"postId\" value=\"$dbContentArr[post_id]\"/>
            </form>
                                    </div>
                                </div>
                            </div>





                            <div class=\"row\">
                                <div class=\"col s12 m4\">
                                    <div class=\"card-panel medium white darken-1\">
                                        <div class=\"card-content black-text\">
                                            <span class=\"card-title \"> <center>Specifications</center</span>
                                            <p style=\"font-size: 15px\">
                                                <table>
                                                    <center>
                                                        <thead>
                                                            <tr>
                                                                <th data-field=\"color\">Price </th>
                                                                <th data-field=\"color\">Highest Offer </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td> $ $dbContentArr[price] </td>
                                                                <td> $ $dbContentArr[offer] </td>
                                                            </tr>

                                                        </tbody>
                                                    </center>
                                                </table>

                                            </p>

                                        </div>



                                        <!--<div class=\"card-action\">
              <a href=\"#\"> <center> Buy </center> </a>
              <a href=\"#\"> <center> Offer </center> </a>
            </div> -->


                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col s12 m4\">
                                        <div class=\"card-panel medium white black-text darken-1\">
                                            <div class=\"card-content white black-text\">
                                            
                                                <span class=\"card-title\"> <center>Seller<p id='appUsername'></p></center</span>
                                                <p style=\"font-size: 15px; color:black;\">
                                                    
                                                </p>
                                                
                                                <span class=\"card-title\"> <center>Description</center</span>
                                                <p style=\"font-size: 15px; color:black;\">
                                                    $dbContentArr[description]
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <section id=\"section-comments\">

                                    <!-- <section id=\"section-comments\"> -->
                                    <div class=\"container\">

                                        <div class=\" row col s12 m12 card-panel\">

                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    <span class=\"glyphicon glyphicon-comment\" aria-hidden=\"true\"></span>
                                                    <div class=\"inline pull-right\" style=\"font-weight: normal;\">
                                                        <div class=\"clearfix\"></div>
                                                    </div>
                                                    <div class=\"panel-body\">
                                                        <p style=\"margin: 0px;\">
                                                            Comments on this page are <b>public</b> and visible to everyone.
                                                        </p>
                                                    </div>
                                                    <ul class=\"list-group\">
                                                        <li class=\"list-group-item\">

                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>


                                </section>
               " );
            }
        return $data;
        }






    function buyItData($num){
        $data = mysql_query("SELECT * FROM posts WHERE post_id = $num");
        
        while($row = mysql_fetch_array($data))
        {
            //print_r($row);
            print('<div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  #26a69a  black-text">$' . $row[price] . '</a>
                            

                            <a href="#"><img src="' . $row[image_reference_url] . '" alt="product-img">
                            </a>
                        </div>
                        <div class="card-content">

                            <div class="row">
                                <div class="col s8">
                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">'.$row[title].'</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>');
        }
    }



?>