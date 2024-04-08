
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
    <div id="okee" >
        <h1>Update Data</h1>
        <input type="text" v-model="dataArticle.id" placeholder="ID">
        <input type="text" v-model="dataArticle.title" placeholder="Title">
        <input type="text" v-model="dataArticle.userId" placeholder="User ID">
        <input type="text" v-model="dataArticle.completed" placeholder="Completed">

        <button @click="putData">Submit</button>
        <div>
            <!-- {{dataArticle}} -->
            {{cek}}
        </div>
        <div v-if="showResponse">
            <h3>Data Updated</h3>
            {{dataArticle}}
        </div>
    </div>

    <script src="app2.js" type="module">
        
    </script>
</body>
</html>
