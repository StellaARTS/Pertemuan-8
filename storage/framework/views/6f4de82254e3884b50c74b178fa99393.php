<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Pasien</h5>
                        <form action="/pasien" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mt-1 mb-3">
                                <label for="foto">Foto Pasien (jpg, jpeg, png)</label>
                                <input type="file" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="foto">
                                <span class="text-danger"><?php echo e($errors->first('foto')); ?></span>
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="nama">Nama Pasien</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
                                <span class="text-danger"><?php echo e($errors->first('nama')); ?></span>
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="no_pasien">Nomor Pasien</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['no_pasien'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="no_pasien" name="no_pasien" value="<?php echo e(old('no_pasien')); ?>">
                                <span class="text-danger"><?php echo e($errors->first('no_pasien')); ?></span>
                            </div>

                            <div class="form-group mt-1 mb-3">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control <?php $__errorArgs = ['umur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="umur" name="umur" value="<?php echo e(old('umur')); ?>">
                                <span class="text-danger"><?php echo e($errors->first('umur')); ?></span>
                            </div>

                            <div class="form-group mt-1 mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="laki-laki" <?php echo e(old('jenis_kelamin') === 'laki-laki' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                        value="perempuan" <?php echo e(old('jenis_kelamin') === 'perempuan' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <span class="text-danger"><?php echo e($errors->first('jenis_kelamin')); ?></span>
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="alamat" name="alamat" value="<?php echo e(old('alamat')); ?>">
                                <span class="text-danger"><?php echo e($errors->first('alamat')); ?></span>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Tambah Data Pasien'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinikapp\resources\views/pasien_create.blade.php ENDPATH**/ ?>