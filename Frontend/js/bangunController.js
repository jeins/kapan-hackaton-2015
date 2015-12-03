//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Main Controller ---------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('mainCtrl', function($scope, bangunService, $http, $location){

  //--------------- get all projects ----------------------------------
  bangunService.getProjects(function(response){

        var data = response.data;
        $scope.projects = data;

        for(var i=0; i<Object.keys(data).length; i++){

            // console.log( i + " Harusnnya urutannya " + response.data[i].profile_pemerintah_id);
            $http.get(_URL + '/api/profile/' + response.data[i].profile_pemerintah_id)
            .success(function(dataP) {
                // console.log(dataP);
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

    //--------------- total Proyek per Pemerintah -----------------------
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
