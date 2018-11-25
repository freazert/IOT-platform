<template>
    <div>
        <div class="alert alert-success" v-if="saved">
            <strong>Success!</strong> Your sensor has been saved successfully.
        </div>

        <div class="well well-sm" id="sensor-form">
            <form class="form-horizontal" method="post" @submit.prevent="onSubmit">
                <fieldset>
                    <legend class="text-center">Create a new sensor</legend>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="sensor_name">Name</label>
                        <div class="col-md-9" :class="{'has-error': errors.sensor_name}">
                            <input id="sensor_name"
                                   v-model="sensor.sensor_name"
                                   type="text"
                                   placeholder="Sensor name"
                                   class="form-control">
                            <span v-if="errors.sensor_name" class="help-block text-danger">{{ errors.sensor_name[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Type of sensor</label>
                        <div class="col-md-9" :class="{'has-error': errors.type}">
                            <input id="type"
                                   v-model="sensor.type"
                                   type="text"
                                   placeholder="type"
                                   class="form-control">
                            <span v-if="errors.type" class="help-block text-danger">{{ errors.type[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="body">Description of sensor</label>
                        <div class="col-md-9" :class="{'has-error': errors.description}">
                                    <textarea class="form-control"
                                              id="body"
                                              v-model="sensor.description"
                                              placeholder="Please enter the description..."
                                              rows="5"></textarea>
                            <span v-if="errors.description" class="help-block text-danger">{{ errors.description[0] }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                errors: [],
                saved: false,
                sensor: {
                    sensor_name: null,
                    type: null,
                    description: null,
                }
            };
        },

        methods: {
            onSubmit() {
                this.saved = false;
                axios.post('api/sensors', this.sensor)
                    .then(({data}) => this.setSuccessMessage())
                    .catch(({response}) => this.setErrors(response));
                                    console.log("hello");

            },

            setErrors(response) {
                this.errors = response.data.errors;
            },

            setSuccessMessage() {
                this.reset();
                this.saved = true;
            },

            reset() {
                this.errors = [];
                this.sensor = {sensor_name: null, type: null, description: null};
            }
        }
    }
</script>