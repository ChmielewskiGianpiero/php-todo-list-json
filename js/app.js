const { createApp } = Vue

  createApp({
    data() {
      return {
        newTodo: '',
        todos: []
      }
    },
    methods: {
        fetchData(){
            axios.get('./server.php').then((res) => {
                this.todos = res.data.results
            }
        )
        },
        addTodo() {
          const data = {
            todo: this.newTodo
          }

          axios.post('./store.php', data , {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          })
          .then((res) =>{
            this.todos = res.data.results
          })
        }
    },
    created() {
        this.fetchData()
    }
  }).mount('#app')