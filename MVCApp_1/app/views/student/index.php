<div class ="container">
    <h3>Students</h3>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Roll No</th>
            <th>Semester</th>
            <th>Email</th>

        </tr>
        <?php foreach ($data['students'] as $students_data) { ?>
            <tr>
                <td><?= $students_data['name'] ?></td>
                <td><?= $students_data['age'] ?></td>
                <td><?= $students_data['rollno'] ?></td>
                <td><?= $students_data['semester'] ?></td>
                <td><?= $students_data['email'] ?></td>
                <td align="right">
                    <a href="<?php echo Config::get('baseURL') . DS ?>student/edit/<?= $students_data['id'] ?>">
                        <button class="btn btn-sm btn-primary">Edit</button>
                    </a>
                    <a href="<?php echo Config::get('baseURL') . DS ?>student/delete/<?= $students_data['id'] ?>" onclick = "return confirmDelete();">
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br/>

    <div>
        <a href="<?php echo Config::get('baseURL') . DS ?>student/add/">
            <button class="btn btn-sm btn-success">Add Student</button>
        </a>
    </div>
</div>