 <!-- Main Content Container -->
<main role="main">
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container d-flex align-items-center h-100">
            <div class="row">
                <!-- Title Text -->
                <div class="col-md-8">
                    <h1>Selamat datang di HDA</h1>
                    <p>Himatif Database Application adalah database online yang berisikan informasi mengenai Mahasiswa S-1 Teknik Informatika Unpad</p>
                </div>
    
                <!-- Login Form Container-->
                <div class="col-md-4">
                    <form method="POST" action="<?php echo site_url('login/ceklogin') ?>">
                        <!-- NPM -->
                        <div class="form-group">
                            <label for="text">NPM</label>
                            <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" name="npm">
                        </div>
    
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                        </div>
    
                        <!-- Checkbox 'Remember me'-->
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember-me">Ingat Saya
                            </label>
                        </div>
    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
