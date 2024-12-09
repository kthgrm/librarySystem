<?php include('include/header.php'); ?>

    <?= alertMessage(); ?>
    <div class="row">
        <div class="col-md-3 col-lg-3">
            <div class="pt-4 ps-4 mb-4">
                <h3 class="mb-0 h4 font-weight-bolder">
                    Edit Book
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
        <div class="table-responsive mb-4">
            <table class="table table-bordered align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Date Published</th>
                        <th>ISBN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $subject = isset($_GET['subject']) ? $_GET['subject'] : '';
                        $search = isset($_GET['search']) ? $_GET['search'] : '';
                        $books = getBooks($subject, $search);
                        if (mysqli_num_rows($books) > 0) {
                            foreach($books as $book){
                    ?>
                                    <tr>
                                        <td><img style="width: 45px; height: 45px" src="<?= $book['picture_url'];?>"> <?= $book['title'];?></td>
                                        <td><?= $book['subject'];?></td>
                                        <td><?= $book['author'];?></td>
                                        <td><?= $book['publisher'];?></td>
                                        <td><?= $book['date_published'];?></td>
                                        <td><?= $book['isbn'];?></td>
                                        <td class="text-center">
                                            <a href="book-edit.php?id=<?= $book['id'];?>" class="btn btn-success btn-m"><i class="material-symbols-rounded opacity-10">edit_square</i></a>
                                        </td>
                                    </tr>
                    <?php
                            }
                        }else{
                    ?>
                            <tr>
                                <td colspan="9">
                                    <div class="alert alert-danger">
                                        <h4>No books found</h4>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include('include/footer.php'); ?>