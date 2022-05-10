var app = new Vue({
    el: '#app',
    data: {
      inglouriousArray: [],
    },
    
    created(){
        axios.get( 'http://localhost/php-oop-1/partials/databaseJson.php' )
        .then((res) => {
          console.log(res.data);
          this.inglouriousArray = res.data;
        })
    },
    
    methods: {
      
    }
})