var appUrl = document.querySelector('#appUrl').getAttribute('content');
new Vue({
  http: {
    root: '/root',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('#xss-token').getAttribute('content')
    }
  },
  el: 'body',
  data: {
    companies: [],
    formErrors: [],
    error: false,
    newCompany: {
      name: ''
    }
  },
  created: function(){
    this.getCompanies();
  },
  methods: {
    getCompanies: function(){
      this.$http.get(appUrl + 'company/list').then(function(response){
        this.$set('companies', response.data);
      });
    },
    addCompany: function(){
      var companyDeets = this.newCompany;
      this.$http.post(appUrl + 'company', companyDeets).then(function(response){
        this.getCompanies();
      }, function(response){
        this.error = true;
        this.formErrors = response.data;
      });
    }
  }

});
