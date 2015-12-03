//---------------------------------------------------------------------------------------------------
//--------------------- bangunApp Controller ---------------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.controller('mainCtrl', function($scope, bangunService, $http){

  //--------------- get all projects ----------------------------------
  bangunService.getProjects(function(response){

        var data = response.data;
        $scope.projects = data;

        for(var i=0; i<Object.keys(data).length; i++){

            // console.log("test " + i + response.data[i].profile_pemerintah_id);

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

  //--------------- get project detail ----------------------------------
  bangunService.getProjectDetail(function(response){

      var data = response.data;
      $scope.project = data;

      //get info pemilik proyek
      $http.get(_URL + '/api/profile/' + data.profile_pemerintah_id)
      .success(function(dataP) {
           console.log(dataP);
      });
  });

});
