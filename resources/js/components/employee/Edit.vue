<template>
	    <div class="content-wrapper">
      <div class="container-full">
        <!-- Main content -->
        <section class="content">

            <div class="row justify-content-center">

            <!--Box controls!-->
              <div class="col-md-8 col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title"><strong> Update Employee Details</strong></h4>
                    <ul class="box-controls pull-right">
                      <li><a class="box-btn-close" href="#"></a></li>
                      <li><a class="box-btn-slide"  href="#"></a></li>  
                      <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                  </div>

                  <div class="box-body">
                    <div class="box-body">
                  <div class="box">
                    <div class="box-header with-border">
                        <router-link :to="{name: 'employeeIndex'}" class="btn-primary btn px-3 py-2 mb-8">Employee Details</router-link>
                     <div v-show="showError" :class="{'mt-10 alert alert-danger text-center alert-dismissable': showError }">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <b>{{errMsg}}</b> </div>
                    <!-- /.box-header -->

                    <form class="form" @submit.prevent="updateEmployee">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Firstname</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" v-model="edata.firstname" required name="" value="" class="form-control" required placeholder="Firstname">
                                </div>
                            </div>
                             <div class="form-group">
                                <label>Lastname</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" v-model="edata.lastname" required name="first_name" value="" class="form-control" placeholder="Lastname">
                                </div>
                            </div>
                         <div class="form-group">
                                <label>middlename</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" v-model="edata.middlename" required name="first_name" value="" class="form-control" placeholder="middlename">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" v-model="edata.address" required name="first_name" value="" class="form-control" placeholder="Address">
                                </div>
                            </div>
                       <div class="form-group">
                                <label>Country</label>
                                <select class="form-control" v-model="edata.country" @change="getState">
                                    <option >Select A Country</option>
                                    <option class="text-capitalize" v-for="country  in eCountry" :value="country.id"  :key="country.id">{{country.name}}</option>
                                </select>
                            </div>
                       <div class="form-group">
                                <label>State</label>
                                <select class="form-control" v-model="edata.state" @change="getCity">
                                    <option>Select A State</option>
                                    <option class="text-capitalize" v-for="state in eState" :value="state.id"  :key="state.id"> {{state.name}} </option>
                                </select>
                            </div>
                        <div class="form-group">
                                <label>City</label>
                                <select class="form-control" v-model="edata.city">
                                    <option>Select A City</option>
                                    <option class="text-capitalize" v-for="city in eCity" :value="city.id"  :key="city.id">
                                        {{city.name}} 
                                    </option>
                                </select>
                            </div>
                        <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" v-model="edata.department">
                                    <option>Select A Department</option>
                                     <option class="text-capitalize" v-for="department in eDept" :value="department.id"  :key="department.id">{{department.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ZIPCode</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-flag"></i></span>
                                    </div>
                                    <input type="" name="email" required  v-model="edata.zipcode" value="" class="form-control" placeholder="ZIPCode">
                                </div>
                            </div>
                  <div class="form-group">
                                <label>Date Of Birth</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-time"></i></span>
                                    </div>
                                    <date-picker class="form-control" v-model="edata.dob" valueType="format"></date-picker>
                                </div>
                            </div>
                        <div class="form-group">
                                <label>Date Hired</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-time"></i></span>
                                    </div>
                                    <date-picker class="form-control" v-model="edata.date_hired" valueType="format"></date-picker>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Employee Experience</label>
                               <textarea rows="30" cols="30" class="form-control" placeholder="ZIPCode" v-model="edata.experience"></textarea>
                                </div>
                            </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-rounded btn-warning btn-outline mr-1">
                              <i class="ti-trash"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                              <i class="ti-save-alt"></i>
                              SAVE
                            </button>
                        </div>  
                    </form>
                  </div>
                  <!-- /.box -->            


                    </div>
                  </div>
                </div>
              </div>

            </div>



</div>
        </section>
        <!-- /.content -->
      </div>
  </div>
</template>

<script>
import DatePicker from 'vue2-datepicker';
  import 'vue2-datepicker/index.css';
export default {

  name: 'Edit',
  component: {
    DatePicker
  },
  data() {
    return {
        eCountry: [],
        eDept: [],
        eCity: [],
        eState: [],
    showError: false,
      errMsg: null,
      edata: {
        firstname: '',
        lastname: '',
        department: '',
        country: '',
        city: '',
        state: '',
        dob: null,
        date_hired: null,
        middlename: '',
        address: '',
        zipcode: '',
        experience: '',
      }
  }

  },
  created(){
    //this.getEmployee();
    this.getCountry();
    this.getDepartment();
    this.editEmployee();
  },
  methods: {
        getCountry(){
          axios.get('/sanctum/csrf-cookie').then(res => {
          axios.get('/api/employee/country')
          .then(res => {
            this.eCountry = res.data;
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
      })
        },
         getDepartment(){
          axios.get('/sanctum/csrf-cookie').then(res => {
          axios.get('/api/employee/department')
          .then(res => {
            this.eDept = res.data;
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
      })
        },
        getState(){
                      axios.get('/sanctum/csrf-cookie').then(res => {
            axios.get('/api/employee/state/' + this.edata.country)
          .then(res => {
            this.eState = res.data.state;
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
      })
        },
        getCity(){
                  axios.get('/sanctum/csrf-cookie').then(res => {
             axios.get('/api/employee/city/' + this.edata.state)
          .then(res => {
            this.eCity = res.data.city;
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
      })
        },
        editEmployee(){
                      axios.get('/sanctum/csrf-cookie').then(res => {
            axios.get('/api/employee/edit/' + this.$route.params.user)
          .then(res => {
            this.edata = res.data.data;
            if (this.edata.state || this.edata.country) {
            this.getState();
            this.getCity();
            }
          })
          .catch(err => {
            this.showError = true,
            this.errMsg = err;
          })
      })

        },
        updateEmployee(){
                      axios.get('/sanctum/csrf-cookie').then(res => {
            axios.put('/api/employee/update/' + this.$route.params.user,  this.edata)
          .then(res => {
            if (res.data == "Done.") {
                this.$router.push({ name: 'Index', params:{ eid: this.edata.user}});
            }
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