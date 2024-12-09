<?php include('include/header.php'); ?>

    <div class="row">
        <div class="col-md-3 col-lg-3">
            <div class="pt-4 ps-4 mb-4">
                <h3 class="mb-0 h4 font-weight-bolder">
                    Book List
                </h3>
            </div>
        </div>
        <div class="col"></div>
        <div class="col-md-3 col-lg-3">
            <form method="GET" action="">
                <div class="mb-4">
                    <label for="search" class="form-label">Search Books:</label>
                    <input type="text" name="search" id="search" class="form-control border ps-2" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" placeholder="Enter book title or author">
                </div>
            </form>
        </div>
        <div class="col-md-3 col-lg-3">
            <form method="GET" action="">
                <div class="mb-4">
                    <label for="subject" class="form-label">Filter by Category:</label>
                    <select name="subject" id="subject" class="form-select ps-2" onchange="this.form.submit()">
                        <option value="">All</option>
                        <option value="programming" <?= isset($_GET['subject']) && $_GET['subject'] == 'programming' ? 'selected' : '' ?>>Programming</option>
                        <option value="networking" <?= isset($_GET['subject']) && $_GET['subject'] == 'networking' ? 'selected' : '' ?>>Networking</option>
                        <option value="cybersecurity" <?= isset($_GET['subject']) && $_GET['subject'] == 'cybersecurity' ? 'selected' : '' ?>>Cybersecurity</option>
                        <option value="data science" <?= isset($_GET['subject']) && $_GET['subject'] == 'data science' ? 'selected' : '' ?>>Data Science</option>
                        <option value="artificial intelligence" <?= isset($_GET['subject']) && $_GET['subject'] == 'artificial intelligence' ? 'selected' : '' ?>>Artificial Intelligence</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= alertMessage(); ?>
            <div class="row">
                <?php
                    $subject = isset($_GET['subject']) ? $_GET['subject'] : '';
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    $books = getBooks($subject, $search);
                    if (mysqli_num_rows($books) > 0) {
                        foreach($books as $book){
                ?>
                            <div class="col-md-4 col-lg-3 mb-4">
                                <div class="card h-100">
                                    <div class="card-header text-center">

                                        <img class="img-fluid" src="<?= $book['picture_url'];?>">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $book['title'];?></h5>
                                        <p class="card-text"><?= $book['description'];?></p>
                                        <p class="card-text"><strong>Author:</strong> <?= $book['author'];?></p>
                                        <p class="card-text"><strong>Year:</strong> <?= $book['date_published'];?></p>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }else{
                ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <h4>No books found</h4>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

<?php include('include/footer.php'); ?>