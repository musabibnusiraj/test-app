<?php
require_once('../layouts/header.php');
include BASE_PATH . '/models/user_model.php';

$userModel = new User();
$table = $userModel->getTableName();
$data = $userModel->getAll();

// dd($data);
// print($table);
?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Users</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Permission</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    foreach ($data as $key => $user) {
                    ?>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $user['username'] ?? '' ?></strong></td>
                            <td><?= $user['email'] ?? '' ?></td>
                            <td>
                                <span class="text-capitalize"> <?= $user['permission'] ?? '' ?></span>
                            </td>
                            <td>
                                <?php if ($user['is_active'] == 1) { ?>
                                    <span class="badge bg-success">Active</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger">In Active</span>
                                <?php } ?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

    <hr class="my-5" />


</div>
<!--/ Responsive Table -->
</div>
<!-- / Content -->

<?php
require_once('../layouts/footer.php');
?>