<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1 class="page-header text-center">vue js</h1>
    <div id="okee">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    Member List
                    <button class="btn btn-primary pull-right" onclick="window.location.href='post.php'">
                        <span class="glyphicon glyphicon-plus"></span>Member
                    </button>
                </h2>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <th>User ID</th>
                <th>ID</th>
                <th>Title</th>
                <th>Completed</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr v-for="info in infos" :key="info.id">
                    <td>{{ info.userId }}</td>
                    <td>{{ info.id }}</td>
                    <td>{{ info.title }}</td>
                    <td>{{ info.completed }}</td>
                    <td>
                        <a :href="'put2.php?id=' + info.id" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                        <button class="btn btn-danger" @click="deleteData(info.id)"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="module" src="app3.js"></script>

</body>
</html>
