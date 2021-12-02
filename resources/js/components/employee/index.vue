<template>
    <div class="content-wrapper">
      <div class="container-full">
        <section class="content">

          <div class="row">
          <div class="col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title font-weight-bold mb-15">Employee Records</h4><br>
               <router-link :to="{name: 'employeeIndex'}" class="btn-primary btn px-3 py-2 mb-8">Employee</router-link>
                  <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <form class="form-inline" @submit.prevent="">
                          
                           <input type="text" v-model.lazy="SearchList" required placeholder="search">
                        </form>
                    </div>
                  </div>
                  <br>
        
              <div v-show="showError" :class="{'mt-10 alert alert-danger text-center alert-dismissable': showError }">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <b>{{errMsg}}</b> </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tr>
                          <th>Employee ID</th>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Department</th>
                          <th>Username</th>
                          <th>Country</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Date of Birth</th>
                          <th>Hired On</th>
                          <th>Registered On</th>
                          <th>ZipCode</th>
                          <th>Actions</th>
                        </tr>
                        <tr v-for="employee in AllEmployee" :key="employee.uid">
                          <td class="text-capitalize">{{employee.eid}}</td>
                          <td class="text-capitalize">{{employee.firstname}}</td>
                          <td class="text-capitalize">{{employee.lastname}}</td>
                          <td class="text-capitalize">{{employee.department}}</td>
                          <td class="text-lowercase">{{employee.user}}</td>
                          <td class="text-capitalize">{{employee.country}}</td>
                          <td class="text-capitalize">{{employee.city}}</td>
                          <td class="text-capitalize">{{employee.state}}</td>
                          <td class="text-capitalize"><i class="fa fa-clock-o"></i>{{employee.dob}}</td>
                          <td class="text-capitalize"><i class="fa fa-clock-o"></i>{{employee.date_hired}}</td>
                          <td class="text-capitalize">{{employee.reg_on}}</td>
                          <td class="text-capitalize">{{employee.zipcode}}</td>
                          <td class="text-capitalize">
                        <router-link :to="{name: 'employeeEdit', params: { user: employee.eid }}" class="btn d-block-inline btn-primary mb-2 px-2 py-1 btn-rounded btn-outline">edit</router-link>
                        <router-link :to="{name: 'Index', params: { eid: employee.user }}" class="btn d-block-inline btn-success mb-2 px-2 py-1 btn-rounded btn-outline">proflie</router-link>
                          </td>
                      </tr>
                  
                      </table>
                    </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
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
      AllEmployee: [],
      SearchList: '',

    }
  },
  watch: {
    SearchList()  {
      this.getEmployee();
      //this.SearchList = ''
      }
  },
  created(){
    this.getEmployee();
  },
  methods: {
        getEmployee(){
          axios.get('/sanctum/csrf-cookie').then(res => {
            axios.get('/api/employee',{
            params:{
                s: this.SearchList
            }
          })
          .then(res => {
            this.AllEmployee = res.data.data;
          })
          .catch(err => {
            //console.log(err)
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