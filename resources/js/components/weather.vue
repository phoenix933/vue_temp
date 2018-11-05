<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ cityWoeid }}</div>

                    <div class="card-body">
                        Weather Component.
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
            }
        },
        mounted() {

        }
    }
</script>
