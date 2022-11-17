<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <form method="post">
        @csrf
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Số a:" name="SoA">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="Số b:" name="SoB">
        </div>

        <button type="submit" class="btn btn-primary">Tính</button>

        <div>
            <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if (isset($tinhtong)) echo $tinhtong; ?>">
        </div>

    </form>
</body>