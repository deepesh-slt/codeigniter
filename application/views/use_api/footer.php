    <footer class="bg-dark text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-0 py-3 text-uppercase">
                        <?= empty($title) ? 'GET API' : $title; ?> footer
                    </h2>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <?= empty($page_name) ? '' : '<script>const pageName = `'.$page_name.'`, baseUrl = `'.base_url().'`;</script>'; ?>
    <script src="<?= base_url('assets/js/use_api.js'); ?>"></script>
</body>
</html>