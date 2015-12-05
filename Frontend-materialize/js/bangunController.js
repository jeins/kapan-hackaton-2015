//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Main Controller ---------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('mainCtrl', function($scope, bangunService, $http, $location){

  //--------------- get all projects ----------------------------------
  bangunService.getProjects(function(response){
        $scope.projects = response.data;
  });

  //--------------- leaflet Map @Home ----------------------------------
  $scope.showPeta = function() {
   $('#kartu_proyek').fadeOut();
   $('#map').fadeIn();
 }

  $scope.showKartu = function() {
   $('#map').fadeOut();
   $('#kartu_proyek').fadeIn();
  }

});


//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Prof Controller ---------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('profilCtrl', function($scope, bangunService, $http, $location){

    //--------------- get Profil ----------------------------------------
    bangunService.getProfile(function(response){
        $scope.profil_infos = response.data;
    });

    //--------------- Info Proyek per Pemerintah -----------------------
    bangunService.getProjectEach(function(response){
          var hash_pemId = $location.hash();
          var totalProyek = 0;
          var data = response.data;
          var arrayProject = [];

          for(var i=0; i<Object.keys(data).length; i++){
              if(hash_pemId == data[i].profile_pemerintah_id){
                arrayProject[totalProyek] = data[i];
                totalProyek ++;
              }
          }

          $scope.projectsEach = arrayProject;
          $scope.profil_infos.totalProyek = totalProyek;
    });




});


//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Halaman Detail Controller ------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('detailCtrl', function($scope, bangunService, $http, $location){

  //--------------- get project detail ----------------------------------
  bangunService.getProjectDetail(function(response){

      var data = response.data;
      $scope.project = data;

      //get info pemilik proyek untuk di halaman detail.html
      $http.get(_URL + '/api/profile/' + data.profile_pemerintah_id)
      .success(function(dataP) {
           $('#jabatan_pemilik').text(dataP.fullname);
      });
  });

  $scope.submitKomentar = function(){

    var inputData = {
      komentar: this.komentar_text,
      like: this.komentar_like_toggle,
      media:this.komentar_media,
      media_text:this.komentar_media_text
    };

    console.log(inputData);
  }

});


//---------------------------------------------------------------------------------------------------
//--------------------- Auth Rakyat Controller -----------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('rakyatAuthCtrl', function($scope, bangunService, $http, $location){

  //--------------- login rakyat ----------------------------------
  $scope.loginSubmit = function(){
      // console.log(this.username);
      var inputData = {
        email: this.email,
        password: this.password
      };

      $http.post(_URL + '/auth/rakyat/login', inputData)
      .success(function(data) {
        console.log(data);
      })
      .error(function(data){
        console.log("error login!");
      });
  };

  //--------------- register rakyat ----------------------------------
  $scope.registerSubmit = function(){
      // console.log(this.username);
      var inputData = {
        fullname: this.fullname,
        email: this.email,
        password: this.password
      };

      $http.post(_URL + '/auth/rakyat/signup', inputData)
      .success(function(data) {
        console.log(data);
      })
      .error(function(data){
        console.log("error signup!");
      });
  };

});

//---------------------------------------------------------------------------------------------------
//--------------------- Auth Pemerintah Dashboard Controller ---------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('dashboardCtrl', function($scope, bangunService, $http, $location){

  //--------------- login Pemerintah ----------------------------------
  $scope.loginSubmit = function(){
      // console.log(this.username);
      var inputData = {
        email: this.email,
        password: this.password
      };

      $http.post(_URL + '/auth/admin/login', inputData)
      .success(function(data) {
        console.log(data.token);
      })
      .error(function(data){
        console.log("cannot login!");
      });
  };

  //--------------- register Pemerintah ----------------------------------
  $scope.registerSubmit = function(){
      // console.log(this.username);
      var inputData = {
        fullname: this.fullname,
        jabatan: this.jabatan,
        email: this.email,
        password: this.password
      };

      $http.post(_URL + '/auth/admin/signup', inputData)
      .success(function(data) {
        console.log(data.token);
      })
      .error(function(data){
        console.log("cannot signup!");
      });
  };

  //--------------- update profile Pemerintah --------------------------------
  $scope.updateSubmit = function(){

      // console.log(this.username);
      var inputData = {
        fullname: this.fullname,
        jabatan: this.jabatan,
        email: this.email,
        password: this.password
      };

      console.log(inputData);

      $http.put(_URL + '/auth/profile', inputData)
      .success(function(data) {
        console.log(data.token);
      })
      .error(function(data){
        console.log("cannot update profile!");
      });
  };

});

//---------------------------------------------------------------------------------------------------
//--------------------- Submit proyek Controller -------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('proyekBaruCtrl', function($scope, bangunService, $http, $location){

  //--------------- submit proyek baru ----------------------------------
  $scope.submitProyek = function(){

      var inputData = {
        nama: this.judul_proyek,
        profile_pemerintah_id: this.pem_id,
        jenis: this.jenis_proyek,
        deskripsi: this.desc_proyek,
        file: this.file_proyek,
        lokasi: this.lokasi_proyek,
        status_selesai: this.status_proyek,
        biaya: this.biaya_proyek,
        outcome: this.outcome_proyek,
        jadwal_terealisasi: this.targetWaktu_proyek
      };

      $http.post(_URL + '/admin/project', inputData)
      .success(function(data) {
        console.log("input proyek berhasil");
      })
      .error(function(data){
        console.log("error input proyek");
      });
  };

  //--------------- edit proyek lama ----------------------------------
  $scope.updateProyek = function(){

      var hash_proyek_id = $location.hash();

      //belum ada progressbar
      var inputData = {
        id_proyek: hash_proyek_id,
        nama: this.judul_proyek,
        profile_pemerintah_id: this.pem_id,
        jenis: this.jenis_proyek,
        deskripsi: this.desc_proyek,
        file: this.file_proyek,
        lokasi: this.lokasi_proyek,
        status_selesai: this.status_proyek,
        biaya: this.biaya_proyek,
        outcome: this.outcome_proyek,
        jadwal_terealisasi: this.targetWaktu_proyek
      };

      console.log(inputData);

      $http.put(_URL + '/admin/project', inputData)
      .success(function(data) {
        console.log("edit proyek berhasil");
      })
      .error(function(data){
        console.log("error edit proyek");
      });
  };

});
