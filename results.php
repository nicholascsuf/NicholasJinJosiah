<html>
<head>
    <title>BOOKSHELF</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src = "script.js"></script>
</head>
<body>
    <nav class = "navbar">
        <div class = "max-width">
            <div class = "logo">BOOKSHELF</div>
            <ul class = "menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#book">Book</a></li>
                <li><a href="#account">Account</a></li>
                <li><a href="#more">More</a></li>
            </ul>
        </div>
    </nav>
    <!-- HOME -->
    <section class = "home" id = "home">
        <div class = "max-width">
            <div class="home-content">
                <div class="text-1">Hello, Welcome to <span>BOOKSHELF</span></div>
            </div>
        </div>
    </section>
    <!-- BOOK -->
    <section class = "book" id = "book">
        <div class = "max-width">
            <h2 class = "title">Search Results:</h2>
            <div class="book-content">
                <div class="column left">
                    <img src = "image/book.png" alt="">
                </div>
                <div class="column right">
                    <form id="search" action="index.php" class="input-box" method="post">
<input type="text" class="input-field" placeholder="Author's Last Name" name="search" required>
                    <input type="text" class="input-field" placeholder="ISBN of the BOOK">		   

 <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <button type="search" class="search-btn">New Search</button>
<p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
</form>



                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
	            <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>                   
	            <p>&nbsp;</p>
		    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>Can't find what you are looking for? Email us! We will do better!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ACCOUNT -->
    <section class = "account" id = "account">
        <div class = "max-width">
            <h2 class = "title">My Account</h2>
            <div class="account-content">
                <div class="column left">
                    <img src = "image/user.png" alt="">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <button type="login" class="login-btn"><a href=Login.html target="_blank">Log In/Sign Up</a></button>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <button type="login" class="login-btn"><a href=Login.html target="_blank">Change Photo</a></button>
                </div>
                <div class = "card">
                    <div class ="box">
                        <form id="search" class="input-box"></form>
                        <button type="login" class="login-btn"><a href=Login.html target="_blank">Edit/Save</a></button>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <label class="label">
                            Username:
                            <input type="text" class="input-field" placeholder="" required>
                        </label>
                        <p>&nbsp;</p>
                        <label class="label">
                            Pseudonym:
                            <input type="text" class="input-field" placeholder="" required>
                        </label>
                        <p>&nbsp;</p>
                        <label class="label">
                            Gender:
                            <input type="text" class="input-field" placeholder="" required>
                        </label>
                        <p>&nbsp;</p>
                        <label class="label">
                            Email:
                            <input type="text" class="input-field" placeholder="" required>
                        </label>
                        <p>&nbsp;</p>
                        <label class="label">
                            Age:
                            <input type="text" class="input-field" placeholder="" required>
                        </label>
                    </div>
                </div>
                <div class = "card">
                    <div class ="box">
                        <h1>My Book List</h1>
                    </div>
                </div>
    </section>
    <!-- MORE -->
    <section class = "more" id = "more">
        <div class = "max-width">
            <h2 class = "title">MORE ABOUT BOOKSHELF</h2>
            <div class="more-content">
                <div class="column left">
                    <img src = "image/book.png" alt="">
                </div>
                <div class="column right">
                    <div class = "text">BOOKSHELF</div>
                    <p>Bookshlef is a newly published tool, </p>
                    <p>you can check the inventory of the book in the website,</p>    
                    <p> or you can check out a book you liked to.</p>
                    <p>&nbsp;</p>
                    <div class = "text">Didn't find what you like?</div>
                    <p>Send us an message,</p>
                    <p>Tell us what would you like to add.</p>
                    <p>We work to satisfy our users!</p>
                    <p>We would like to hear any opinion from you!</p>
                </div>
                <div class="column right2">
                    <div class = "text">Get in Touch</div>
                    <p>We are looking forward to hear from you!</p>
                    <div class = "icons">
                        <div class = "row">
                            <i class="fas fa-user"></i>
                            <div class = "info">
                                <div class = "head">Contributers</div>
                                <div class ="sub-title"> L.Jin &nbsp; H.Nicholas &nbsp; P.Josiah</div>
                            </div>
                        </div>
                        <div class = "row">
                            <i class="fas fa-search-location"></i>
                            <div class = "info">
                                <div class = "head">ADDRESS</div>
                                <div class ="sub-title">Fullerton, California</div>
                            </div>
                        </div>
                        <div class = "row">
                            <i class="fas fa-envelope"></i>
                            <div class = "info">
                                <div class = "head">OUT GITHUB Repository</div>
                                <div class ="sub-title"><a href="https://github.com/nicholascsuf/Bookshelf"target="_blank">Visit the Repository</a></div>
                            </div>
                        </div>
                        <div class = "row">
                            <i class="fas fa-arrow-right"></i>
                            <div class = "info">
                                <div class = "head"><a href="mailTo:anan9363639@gmail.com" class="moreButton">SEND MESSAGE</a></div>
                            </div>
                        </div>
                    </div>  
                </div>           
            </div>
        </div>
    </section>
</body>
    <!-- FOOTER -->
    <footer>
        <span>CREATED BY <a href = "#">JIN LU</a> | <span class="far fa-copyright"></span> 2022 ALL RIGHTS RESERVED </span>
    </footer>

</html>