<template>
    <div class="form-group">
        <label>Subject List (Maximum 5 subjects)</label>

        <div v-for="subject in subjects">
            <input type="checkbox" @click="getSessions(subject.id)" v-model="selected" v-bind:value="subject">
            <label class="nice-label">{{subject.name}}</label>
        </div>

        <table border="1">

            <thead>
            <th>&nbsp;</th>
            <th>8AM</th>
            <th>9AM</th>
            <th>10AM</th>
            </thead>
            <tr>
                <td>Monday</td>
                <td v-for="session in sessions" v-if="session.day === 'Monday'">{{session.subject_name}} - {{session.type}}</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td v-for="session in sessions" v-if="session.day === 'Tuesday'">{{session.subject_name}} - {{session.type}}</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td v-for="session in sessions" v-if="session.day === 'Wednesday'">{{session.subject_name}} - {{session.type}}</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td v-for="session in sessions" v-if="session.day === 'Thursday'">{{session.subject_name}} - {{session.type}}</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td v-for="session in sessions" v-if="session.day === 'Friday'">{{session.subject_name}} - {{session.type}}</td>
            </tr>
        </table>
        <!--<div class="col-md-6" style="padding-left: 0px; margin-bottom: 20px">-->
            <!--<p>Subject List</p>-->
            <!--<select class="form-control" v-model="selected" @change="getSessions()">-->
                <!--<option v-for="subject in subjects" v-bind:value="subject.id">-->
                    <!--{{ subject.name }}-->
                <!--</option>-->
            <!--</select>-->
        <!--</div>-->

        <!--<div class="col-md-6" style="margin-bottom: 20px;">-->
            <!--<p>Time Slot</p>-->
            <!--<select class="form-control" v-model="session">-->
                <!--<option v-for="session in sessions" v-bind:value="session.id">-->
                    <!--{{ session.start_time | moment("h:m") }} -  {{ session.end_time }}-->

                <!--</option>-->
            <!--</select>-->
        <!--</div>-->


    </div>
</template>
<style>
    .nice-label {
        font-weight: 100;
    }
</style>
<script>
    export default {
        data() {
            return {
                subjects: [],
                sessions: [],
                session: "",
                selected: []
            };
        },

        created() {
            this.fetchTaskList();
        },

        watch: {
            selected: function () {
                this.getSessions()
            }
        },

        methods: {
            fetchTaskList() {
                axios.get('api/subjects').then((res) => {
                    this.subjects = res.data;
                });
            },

            getSessions(id) {
                axios.get('api/subjects/session/get/' + id).then((res) => {
                    for(let i = 0; i < res.data.length; i ++) {
                        this.sessions.push(res.data[i]);
                    }
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