<!-- Jumbotron -->
<main role="main">
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container d-flex align-items-center h-100">
            <!-- Row -->
            <div class="row">
                <!-- Column untuk teks awal-->
                <div class="col-md-8">
                    <h1>Welcome to HDA</h1>
                    <p>Himatif Database Application adalah database online yang berisikan informasi mengenai Mahasiswa S-1 Teknik Informatika Unpad</p>
                </div>
    
                <!-- Column untuk form login-->
                <div class="col-md-4">
                    <!-- Form -->
                    <form method="POST" action="<?php echo site_url('login/ceklogin') ?>">
                        <!-- NPM -->
                        <div class="form-group">
                            <label for="text">NPM</label>
                            <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" name="npm">
                        </div>
    
                        <!-- Password -->
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password">
                        </div>
    
                        <!-- Checkbox 'Remember me'-->
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
    
                        <!-- Submit buton -->
                        <button type="submit" class="btn btn-primary">login</button>
    
                        <!-- button sementara -->
                        <!-- <a class="btn btn-primary" href="<?php echo site_url('/bk'); ?>">Login</a> -->
                    </form>
                </div>
    
            </div>
        </div>
    </div>
</main>
