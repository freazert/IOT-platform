<template>
    
    <div>
        <div>
            <button>Make new sensor</button>
        </div>
        <div class="panel panel-default" v-for="sensor in sensors" :value="sensor.id" :key="sensor.id">
            <div class="panel-heading">
                <label id="started">Sensor Name:</label> {{ sensor.sensor_name }}
                <label id="started">type:</label> {{ sensor.type }}
            </div>
            <div class="panel">
                <label id="started">Sensor sescription:</label> {{ sensor.description }}
            </div>
            
        </div>
        <paginate
                :page-count="pageCount"
                :click-handler="fetch"
                :prev-text="'Prev'"
                :next-text="'Next'"
                :container-class="'pagination'">
             
        </paginate>
    </div>
</template>
    <script>
    export default {
        data(){
            return{
                sensors: [],
                pageCount: 1,
                endpoint: 'api/sensors?page='
            };
        },
        created(){
            this.fetch();
        },
        methods:{
            fetch(page = 1)
            {
                axios.get(this.endpoint + page)
                .then(({data}) => {
                    this.sensors = data.data;
                    this.pageCount = data.meta.last_page;

                });
            },

            report(id)
            {
                if(confirm('are you sure you want to report thus?'))
                {
                    axios.put('api/sensors/'+id+'/report').then(Response=> this.removeSensor(id));
                }
            },
            removeSensor(id)
            {
                this.sensors = _.remove(this.sensors,function(sensor)
                {
                    return sensor.id != id;
                });
            }

        }

}
</script>