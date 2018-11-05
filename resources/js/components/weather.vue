<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ message }}</div>

                    <div class="card-body">
                        Weather Component.
                        <br><br>
                        <router-link to="/">Go to Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            message: {
                type: String,
                default: 'Vue!'
            }
        },
        mounted() {
            
        }
    }
</script>
