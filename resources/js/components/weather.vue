<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ dataArray['title'] }}</div>

                    <div class="card-body">
                        <i v-show="loading" class="fa fa-spinner fa-spin fa-5x margin-left-45"></i>
                        <table class="table table-borderless" id="table">
    						<thead>
    							<tr>
    								<th>ID</th>
    								<th>Name</th>
    							</tr>
    						</thead>
    						<tr>
    							<td></td>
    							<td></td>
    						</tr>
    					</table>
                        <br><br>
                        <router-link to="/" class="btn btn-danger">Back to Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            cityWoeid: {
                type: String,
                default: 'Vue!'
            },
        },
        data() {
            return {
                dataArray: [],
                loading: false,
            }
        },
        mounted() {
            this.getVueData();
        },
        methods: {
            getVueData: function(){
                this.loading = true;
                axios.get('/get-data/' + this.cityWoeid).then(response => {
                    this.loading = false;
                    this.dataArray = response.data;
                    console.log(this.dataArray);
                });
            },
        },
    }
</script>
