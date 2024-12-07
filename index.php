<?php include('include/header.php'); ?>

    <?php include('login.php'); ?>
    
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Library!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Our library management system offers a range of services to help you manage your library efficiently.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">View Books</h4>
                    <p class="text-muted">Browse through the library's collection and find books by title, author, or genre.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Add Books</h4>
                    <p class="text-muted">Add new books with details like title, author, genre, and publication date.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-pen fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Edit Books</h4>
                    <p class="text-muted">Update book details to keep the library's collection accurate.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-box-archive fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Archive Books</h4>
                    <p class="text-muted">Remove books and archive their details for future reference.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Grid-->
    <section class="page-section bg-light" id="category">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Categories</h2>
                <h3 class="section-subheading text-muted">Explore the various categories of books available in our library.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- category item 1-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal1">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/1.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Programming</div>
                            <div class="category-caption-subheading text-muted">Programming Languages and Techniques</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- category item 2-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal2">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/2.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Networking</div>
                            <div class="category-caption-subheading text-muted">Network Infrastructure and Security</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- category item 3-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal3">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/3.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Cybersecurity</div>
                            <div class="category-caption-subheading text-muted">Cybersecurity Techniques and Practices</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- category item 4-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal4">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/4.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Artificial Intelligence</div>
                            <div class="category-caption-subheading text-muted">AI and Machine Learning</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- category item 5-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal5">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/5.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Software Engineering</div>
                            <div class="category-caption-subheading text-muted">Software Development and Practices</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- category item 6-->
                    <div class="category-item">
                        <a class="category-link" data-bs-toggle="modal" href="#categoryModal6">
                            <div class="category-hover">
                                <div class="category-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/category/6.jpg" alt="..." />
                        </a>
                        <div class="category-caption">
                            <div class="category-caption-heading">Data Science</div>
                            <div class="category-caption-subheading text-muted">Data Science and Analytics</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <p class="section-subheading text-muted">We are passionate about empowering individuals with the knowledge and tools needed to thrive in the ever-evolving world of technology. Our curated collection of books spans a wide range of topics, including Programming, Networking, Cybersecurity, Data Science, Artificial Intelligence, and Software Engineering.</p>
                <p class="section-subheading text-muted">We offer expert-level resources for beginners and advanced learners alike, from hands-on guides to in-depth theory. Whether you're learning Python, mastering machine learning, or delving into the world of cybersecurity, our books are designed to provide the skills and insights necessary to succeed in today's digital landscape. With titles from renowned authors and industry experts, we are committed to supporting your journey in tech education. Join us in exploring the vast potential of technology, and let us be your trusted partner in growth.</p>
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">From BSIT 3F-G2.</h3>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Ferdinand JR Rodriguez</h4>
                        <p class="text-muted">Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Keith Andy M. Garma</h4>
                        <p class="text-muted">Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
    <!-- category Modals-->
    <!-- category item 1 modal popup-->
    <div class="category-modal modal fade" id="categoryModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/1.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category item 2 modal popup-->
    <div class="category-modal modal fade" id="categoryModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/2.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category item 3 modal popup-->
    <div class="category-modal modal fade" id="categoryModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/3.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category item 4 modal popup-->
    <div class="category-modal modal fade" id="categoryModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category item 5 modal popup-->
    <div class="category-modal modal fade" id="categoryModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category item 6 modal popup-->
    <div class="category-modal modal fade" id="categoryModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/category/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer.php'); ?>