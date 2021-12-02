<template>
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Profile</h3>
                    <div v-if="Employee.eid" class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ Employee.eid }}</li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

          <div class="row">
              <div class="col-12 col-lg-5 col-xl-4">
                  
                  <div class="box box-inverse bg-img" style="background-image: url(dashboard/images/gallery/full/1.jpg);" data-overlay="2">

                      <div class="box-body text-center pb-50">
                        <a href="#">
                          <img class="avatar avatar-xxl avatar-bordered" src="/dashboard/images/avatar/5.jpg" alt="">
                        </a>
                        <h4 class="mt-2 mb-0"><a class="hover-primary text-white" v-show="Employee.firstname" href="#">{{ fullName }}</a></h4>
                        <span><i class="fa fa-map-marker w-20"></i> {{ Employee.country }}</span>
                      </div>
                    </div>              

                  <!-- Profile Image -->
                  <div class="box">
                    <div class="box-body box-profile">            
                      <div class="row">
                        <div class="col-12">
                            <div>
                                <p v-show="Employee.user">Email :<span class="text-gray pl-10">{{ Employee.email }} </span> </p>
                                <p v-show="Employee.middlename">Other names :<span class="text-gray pl-10">{{ Employee.middlename }} </span></p>
                                <p v-show="Employee.dob">Date of birth :<span class="text-gray pl-10">{{ Employee.dob }} </span> </p>
                                <p v-show="Employee.date_hired">Date Hired :<span class="text-gray pl-10">{{ Employee.date_hired }} </span> </p>
                                <p v-show="Employee.address">Address :<span class="text-gray pl-10">
                                  {{ Employee.address }} 
                                </span></p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
              </div>
              <div class="col-12 col-lg-7 col-xl-8" v-if="Employee.email != 'admin@admin.com'">
                <div v-show="showError" :class="{'mt-10 alert alert-danger text-center alert-dismissable': showError }">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <b>{{errMsg}}</b> </div>
              <div class="nav-tabs-custom box-profile">
                <ul class="nav nav-tabs">
                  <li><a href="#settings" data-toggle="tab">My Details</a></li>
                </ul>

                <div class="tab-content">

                  <div class="tab-pane d-block" id="settings">      

                    <div class="box p-15">
                      <div class="row">
                        <div class="col-12">
                            <div>
                              <p v-show="Employee.eid" style="font-weight: bold">Employee ID :<p class="text-gray pl-20">{{ Employee.eid }} </p> </p>
                            <p v-show="Employee.country" style="font-weight: bold">Country :<p class="text-gray pl-20">{{ Employee.country }} </p> </p>
                            <p v-show="Employee.department" style="font-weight: bold">Department :<p class="text-gray pl-20">{{ Employee.department }} </p> </p>
                            <p v-show="Employee.state" style="font-weight: bold">State :<p class="text-gray pl-20">{{ Employee.state }} </p> </p>
                            <p v-show="Employee.city" style="font-weight: bold">City :<p class="text-gray pl-20">{{ Employee.city }} </p> </p>
                            <p v-show="Employee.experience" style="font-weight: bold">Experience :<p class="text-gray pl-20">{{ Employee.experience }} </p> </p>
                            <p v-show="Employee.zipcode" style="font-weight: bold">zipcode :<p class="text-gray pl-20">{{ Employee.zipcode }} </p> </p>
                            
                            <div class="form-group row">
                            <div class="ml-auto col-sm-10">
                              <router-link :to="{name: 'userEdit', params: { user: Employee.eid }}" class="btn btn-rounded btn-success">Complete Your Application</router-link>
                            </div>
                            </div>

                        </div>
                      </div>

                    </div>            
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>            
          </div>
        </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
      </div>
  </div>

</template>

<script>
export default {

  name: 'index',

  data () {
    return {
      showError: false,
      errMsg: null,
      Employee: [],

    }
  },
  computed: {
    fullName (){
     return this.Employee.firstname + ' ' + this.Employee.lastname
    },

    email(){
      return this.Employee.user;
    }
  },
  watch: {
    SearchList()  {
      this.getEmployee();
      }
  },
  created(){
    this.getEmployee();
  },
  methods: {
        getEmployee(){
          axios.get('/sanctum/csrf-cookie').then(res => {
          axios.get('/api/employee/profile/' + this.$route.params.eid)
          .then(res => {
            this.Employee = res.data.data;
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
             })
        }

  }
}
</script>

<style lang="css" scoped>
</style>