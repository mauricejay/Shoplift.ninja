<?php include 'core/init.php'; ?>
    <?php include 'core/includes/head.php'; ?>

        <html>

        <body>

            <?php include 'header.php';?>
<br><br>
                <div class="container" style="color: white;">
                    <div class="row col s6 card-panel white accent-3">
                        <h4 class="center black-text" id="register">Create a new listing</h4>
                        <form action="./createIt.php" method="POST">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="input1" name="postTitle" type="text" class="validate black-text">
                                    <label for="input1" class="black-text">Post Name</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="input2" name="photoURL" type="text" class="validate black-text">
                                    <label for="input2" class="black-text">Photo-URL</label>
                                </div>
                                <div class="input-field col s3">
                                    <input id="input3" name="price" type="text" class="validate black-text">
                                    <label for="input3" class="black-text">$Price</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s10">
                                    <textarea id="input4" name="postDescr" class="materialize-textarea black-text"></textarea>
                                    <label for="input4" class="black-text">Description</label>
                                </div>

                                <div class="col s2">
                                    <p>
                                        <input name="postType" type="radio" id="p" value="p" />
                                        <label for="p">Phone</label>
                                    </p>
                                    <p>
                                        <input name="postType" type="radio" id="l" value="l" />
                                        <label for="l">Laptop</label>
                                    </p>
                                    <p>
                                        <input name="postType" type="radio" id="b" value="b" />
                                        <label for="b">Book</label>
                                    </p>
                                </div>
                            </div>
                            <button class="btn waves-effect waves center-align blue accent-1" id="newPost" type="submit" onClick="return empty()">Submit Post
                            </button>

                    </div>
                    </form>
                </div>

                <script type="text/javascript" src="emptyPostChecker.js"></script>
                <script src="materialize/js/materialize.min.js"></script>
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
                <script src="./main.js"></script>
                <script>
                    $(document).ready(function () {
                        $(".button-collapse").sideNav();
                    });
                </script>
        </body>

        </html>