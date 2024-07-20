<?php require_once APPROOT . '/views/inc/admin/header.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php'; ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php'; ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<div class="container">
    <h3 class="text-center">Pending Registrations</h3>
    <?php if (!empty($data['event_registers'])): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Event</th>
                    <th>Roll No</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['event_registers'] as $register): ?>
                    <?php if ($register['status'] == 'pending'): ?>
                        <tr>
                            <td><?php echo $register['name']; ?></td>
                            <td><?php echo $register['event_title']; ?></td>
                            <td><?php echo $register['roll_no']; ?></td>
                            <td><?php echo $register['phone']; ?></td>
                            <td><?php echo $register['email']; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/dashboard/approve/<?php echo $register['id']; ?>" class="btn btn-success">Approve</a>
                                <a href="<?php echo URLROOT; ?>/dashboard/reject/<?php echo $register['id']; ?>" class="btn btn-danger">Reject</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No pending registrations.</p>
    <?php endif; ?>
</div>

<?php require_once APPROOT . '/views/inc/admin/footer.php'; ?>
