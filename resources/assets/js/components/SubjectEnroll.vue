<template>
    <div class="form-group">
        <!--<div class="col-md-6" style="padding-left: 0px; margin-bottom: 20px">-->
            <!--<p>Subject List</p>-->
            <!--<v-select label="name" v-model="subject" :options="subjects" :value="subject.id" @input="getSessions">-->
                <!--<span slot="no-options">Whoops! No result found.</span>-->
            <!--</v-select>-->
        <!--</div>-->
       <!--<div class="col-md-6" style="margin-bottom: 20px;">-->
           <!--<p>Time Slot</p>-->
           <!--<v-select v-model="session" :options="sessions" label="start_time">-->
               <!--<template slot="option" slot-scope="option">-->
                   <!--{{ option.start_time }} &#45;&#45; {{ option.end_time }}-->
               <!--</template>-->
               <!--<span slot="no-options">Whoops! No result found.</span>-->
           <!--</v-select>-->
       <!--</div>-->
        <div class="col-md-6" style="padding-left: 0px; margin-bottom: 20px">
            <p>Subject List</p>
            <select class="form-control" v-model="selected" @change="getSessions()">
                <option v-for="subject in subjects" v-bind:value="subject.id">
                    {{ subject.name }}
                </option>
            </select>
        </div>

        <div class="col-md-6" style="margin-bottom: 20px;">
            <p>Time Slot</p>
            <select class="form-control" v-model="session">
                <option v-for="session in sessions" v-bind:value="session.id">
                    {{ session.start_time | moment("h:m") }} -  {{ session.end_time }}

                </option>
            </select>
        </div>


    </div>
</template>
<script>
    export default {
        data() {
            return {
                subjects: [],
                sessions: [],
                selected: "",
                session: "",
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('api/subjects').then((res) => {
                    this.subjects = res.data;
                });
            },

            getSessions() {
                axios.get('api/subjects/session/get/' + this.selected).then((res) => {
                    this.sessions = res.data;
                });
            }

            // createTask() {
            //     axios.post('api/tasks', this.task)
            //         .then((res) => {
            //             this.task.body = '';
            //             this.edit = false;
            //             this.fetchTaskList();
            //         })
            //         .catch((err) => console.error(err));
            // },
            //
            // deleteTask(id) {
            //     axios.delete('api/tasks/' + id)
            //         .then((res) => {
            //             this.fetchTaskList()
            //         })
            //         .catch((err) => console.error(err));
            // },
        }
    }
</script>