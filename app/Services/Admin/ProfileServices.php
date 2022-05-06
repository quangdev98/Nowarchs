<?php
    namespace App\Services\Admin;
    use Illuminate\Support\Facades\Auth;
    use App\Repositories\Admin\AdminRepositoryInterface;

    class ProfileServices{

        private $adminRepository;

        public function __construct(AdminRepositoryInterface $adminRepository)
        {
            $this->adminRepository = $adminRepository;
        }

        function show($id) {
            return $this->adminRepository->show($id);
        }
    }
?>
