//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Main Controller ---------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('mainCtrl', function($scope, bangunService, $http, $location){

  //--------------- get all projects ----------------------------------
  bangunService.getProjects(function(response){

        var data = response.data;
        var testing;
        $scope.projects = data;

        for(var i=0; i<Object.keys(data).length; i++){

            /* pakai ini jalan, tapi bagusnya ga usah pakai service 2x kl memungkinkan, takutnya kl internet lemot datanya ga sync krn proses service ini async.
            bangunService.getProfilePemerintah(response.data[i].profile_pemerintah_id).then(function(result){
              push_nama(result.fullname, result.id);
            });*/

            // console.log( i + " Harusnnya urutannya " + response.data[i].profile_pemerintah_id);
            $http.get(_URL + '/api/profile/' + response.data[i].profile_pemerintah_id)
            .success(function(dataP) {
                push_nama(dataP.fullname, dataP.id);
            });
        }

       //add nama pemerintah ke view kartu
       var helper = 0;
       function push_nama(nama, id){

           var id_projek     = response.data[helper].id;
           var id_pemerintah = response.data[helper].profile_pemerintah_id;

          $('#oleh_'+ id_pemerintah + '_id_'+ id_projek).text("Oleh: " + nama);
          helper++;
       }
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

});

//---------------------------------------------------------------------------------------------------
//--------------------- Login Dashboard Controller -------------------------------------------------
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
        lokasi: this.lokasi,
        status_selesai: this.status_proyek,
        biaya: this.biaya,
        outcome: this.outcome,
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
  $scope.submitEditProyek = function(){

      var hash_proyek_id = $location.hash();

      var inputData = {
        id_proyek: hash_proyek_id,
        nama: this.judul_proyek,
        profile_pemerintah_id: this.pem_id,
        jenis: this.jenis_proyek,
        deskripsi: this.desc_proyek,
        file: this.file_proyek,
        lokasi: this.lokasi,
        status_selesai: this.status_proyek,
        biaya: this.biaya,
        outcome: this.outcome,
        jadwal_terealisasi: this.targetWaktu_proyek
      };

      $http.put(_URL + '/admin/project', inputData)
      .success(function(data) {
        console.log("edit proyek berhasil");
      })
      .error(function(data){
        console.log("error edit proyek");
      });
  };

});
