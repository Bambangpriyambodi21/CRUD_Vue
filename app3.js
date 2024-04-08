var app = new Vue({
    el: '#okee',
    data () {
      return {
        infos: null,
        articleId: {
          id: null,
          userId: null,
          title: null,
          completed: null
        },
        article: { title: "", userId: "", completed: "" },
        updateArticle: { id: "", title: "", userId: "", completed: "" },
        dataArticle: {},
        showResponse: false,
        showEdit: true,
        adaId: 0
        }
    },
    mounted: function() {
      this.getData();
    },
    methods: {
      async getData(){
        axios
        .get('https://jsonplaceholder.typicode.com/todos')
        .then(response => (this.infos = response.data.slice(0,10)))
      },
      async getDataId(id){
        axios
        .get('https://jsonplaceholder.typicode.com/todos/'+id)
        .then(response => (this.dataArticle = response.data))
        this.showEdit = false;
      },
      async postData() {
          const response = await axios.post("https://jsonplaceholder.typicode.com/todos", this.article);
          this.articleId.id = response.data.id;
          this.articleId.userId = response.data.userId;
          this.articleId.title = response.data.title;
          this.articleId.completed = response.data.completed;
          this.showResponse= true;
      },
      async putData(){
        const response = await axios.put("https://jsonplaceholder.typicode.com/todos/"+this.dataArticle.id, this.dataArticle);
          this.dataArticle.id = response.data.id;
          this.dataArticle.userId = response.data.userId;
          this.dataArticle.title = response.data.title;
          this.dataArticle.completed = response.data.completed;
          this.showResponse= true;
          console.log(dataArticle);
      },
      async deleteData(id){
        const response = await axios.delete("https://jsonplaceholder.typicode.com/todos/"+id);
        alert("Data Deleted");
      }
  }
  })