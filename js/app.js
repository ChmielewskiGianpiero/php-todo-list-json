const { createApp } = Vue

  createApp({
    data() {
      return {
        
      }
    },
    methods: {
        fetchData(){
            axios.get('')
        }
    }
  }).mount('#app')