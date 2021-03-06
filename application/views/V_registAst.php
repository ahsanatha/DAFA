<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creare Account Asisten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class=" container registAst col-md-7 py-3">
        <div class="card">
            <?php echo $this->session->flashdata('message'); ?>
            <header class="card-header">
                <a href="<?= base_url('C_Assistent/signin')?>" class="float-right btn btn-outline-info mt-1"
                    id="btn_ast">Sign in</a>
                <h4 class="card-title mt-2">Create Account</h4>
            </header>
            <div class="card-body">
                <div class="row pb-2">
                    <div class="col-md-12">
                        <div class="wrap bg-white ">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= base_url('C_Assistent/registAst')?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Nama </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" value="<?= set_value('nama') ?>"
                                                    class="form-control" placeholder="Full Name">
                                                <?=form_error('nama','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Email </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Your Email" value="<?= set_value('email') ?>"
                                                    name="email" type="email" class="form-control">
                                                <?=form_error('email','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Password </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Password" name="password" type="password"
                                                    class="form-control">
                                                <?=form_error('password','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Re-Password </label>
                                            <div class="col-sm-8">
                                                <input placeholder="Repeat Your Password" name="password-re"
                                                    type="password" class="form-control">
                                                <?=form_error('password-re','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">NIK</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?= set_value('nik') ?>" name="nik"
                                                    class="form-control">
                                                <?=form_error('nik','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Nomor Telpon</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="noTlp" value="<?= set_value('noTlp') ?>"
                                                    class="form-control">
                                                <?=form_error('noTlp','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-8">
                                                <input type="date" value="<?= set_value('tglLahir') ?>" name="tglLahir"
                                                    class="form-control">
                                                <?=form_error('tglLahir','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Alamat</label>
                                            <div class="col-sm-8">
                                                <textarea rows="3" value="<?= set_value('alamat') ?>" name="alamat"
                                                    class="form-control"></textarea>
                                                <?=form_error('alamat','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="wilayah" name="wilayah">
                                                    <?php foreach($provinsi as $p){ ?>
                                                    <option value="<?=$p?>"><?=$p?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Kode Pos</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?= set_value('kodePos') ?>" name="kodePos"
                                                    class="form-control">
                                                <?=form_error('kodePost','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Instansi</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?= set_value('instansi') ?>" name="instansi"
                                                    class="form-control">
                                                <?=form_error('instansi','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Kategori</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="kategori" name="kategori">
                                                    <option value="bs">Baby Sitter</option>
                                                    <option value="art">Asisten Rumah Tangga</option>
                                                    <option value="str">Suster</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Deskripsi Diri</label>
                                            <div class="col-sm-8">
                                                <textarea rows="3" value="<?= set_value('alamat') ?>" name="deskripsi"
                                                    class="form-control"></textarea>
                                                <?=form_error('alamat','<small class="text-danger">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-2"><button class="btn btn-info" type="submit">Sign
                                                    Up</button></div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- card-body end .// -->
            </div> <!-- card.// -->
        </div>
</body>

</html>