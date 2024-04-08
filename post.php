<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue POST Request Example</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="okee">
        <h1>Input Data</h1>
        <input type="text" v-model="article.title" placeholder="Title">
        <input type="text" v-model="article.userId" placeholder="User ID">
        <input type="text" v-model="article.completed" placeholder="Completed">

        <button @click="postData">Submit</button>
        <div v-if="showResponse">
            <h3>Data Uploaded</h3>
            {{articleId}}
        </div>
    </div>

    <script src="app3.js" type="module"></script>
</body>
</html>
