<template>

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="fName" type="text" v-model="setting.name">

        <label for="email">Email address</label>
        <input class="form-control" type="text" id="email" name="email" v-model="setting.email" readonly>
        <small id="emailHelp" class="form-text text-muted">This field is cannot be modified.</small>

        <select class="form-control" v-model="selected" @change="getData()">
            <option v-for="subject in subjects" v-bind:value="subject.id">
                {{ subject.name }}
            </option>
        </select>

        <select class="form-control" v-model="session">
            <option v-for="session in sessions" v-bind:value="session.id">
                {{ session.start_time }} -  {{ session.end_time }}
            </option>
        </select>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                setting: [],
                subjects: [],
                key: "",
                selected: "",
                sessions: [],
                session: ""
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('api/settings').then((res) => {
                    this.setting = res.data;
                });
                axios.get('api/settings/subjects').then((res) => {
                    this.subjects = res.data;
                });
            },

            getData() {
                axios.get('api/settings/get/' + this.selected).then((res) => {
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