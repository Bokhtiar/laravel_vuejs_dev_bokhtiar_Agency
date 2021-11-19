<template>
    <div class="">
        <div class="card">
            <div class="card-header">
                <div class="card-title d-flex justify-content-between">
                    <p class="h3 d-flex justify-content-between">
                        Create WebSetting
                    </p>
                    <router-link
                        class="btn btn-primary my-4"
                        to="/web/setting/1"
                        >Update WebSetting</router-link
                    >
                </div>
            </div>
            <div class="card-body">
                <form action @submit.prevent="update">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="form-group">
                                <label for>Website Name:</label>
                                <input
                                    v-model="form.website_name"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder=" Name"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('name')"
                                    v-html="form.errors.get('name')"
                                />
                            </div>

                            <div class="form-group">
                                <label for>Website Phone:</label>
                                <input
                                    v-model="form.phone"
                                    type="text"
                                    class="form-control"
                                    name="phone"
                                    placeholder=" Phone"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('phone')"
                                    v-html="form.errors.get('phone')"
                                />
                            </div>

                            <div class="form-group">
                                <label for>Website E-mail:</label>
                                <input
                                    v-model="form.email"
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    placeholder="E-mail"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('email')"
                                    v-html="form.errors.get('email')"
                                />
                            </div>

                            <div class="form-group">
                                <label for>Office Location:</label>
                                <input
                                    v-model="form.location"
                                    type="text"
                                    class="form-control"
                                    name="location"
                                    placeholder="Location"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('location')"
                                    v-html="form.errors.get('location')"
                                />
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-">
                            <div class="form-group">
                                <label for>Website Social Facebook Link:</label>
                                <input
                                    v-model="form.fb"
                                    type="text"
                                    class="form-control"
                                    name="fb"
                                    placeholder="fb link"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('fb')"
                                    v-html="form.errors.get('fb')"
                                />
                            </div>

                            <div class="form-group">
                                <label for
                                    >Website Social Instagram Link:</label
                                >
                                <input
                                    v-model="form.insta"
                                    type="text"
                                    class="form-control"
                                    name="insta"
                                    placeholder="Instagram"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('insta')"
                                    v-html="form.errors.get('insta')"
                                />
                            </div>

                            <div class="form-group">
                                <label for>Website Social Twitter Link:</label>
                                <input
                                    v-model="form.tw"
                                    type="text"
                                    class="form-control"
                                    name="tw"
                                    placeholder="tw"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('tw')"
                                    v-html="form.errors.get('tw')"
                                />
                            </div>

                            <div class="form-group">
                                <label for>Website Social linkdin Link:</label>
                                <input
                                    v-model="form.li"
                                    type="text"
                                    class="form-control"
                                    name="li"
                                    placeholder="li"
                                    minlength="2"
                                    id
                                />
                                <div
                                    v-if="form.errors.has('li')"
                                    v-html="form.errors.get('li')"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            type="submit"
                            class="btn btn-primary float-right"
                            name
                            id
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import Form from "vform";
import axios from "axios";
export default {
    data: () => ({
        form: new Form({
            website_name: "",
            phone: "",
            email: "",
            location: "",
            fb: "",
            insta: "",
            li: "",
            tw: "",
        }),
    }),
    methods: {
        //edit
        edit() {
            axios.get("/admin/web/setting/" + 1).then((response) => {
                this.form.website_name = response.data.web.website_name;
                this.form.phone = response.data.web.phone;
                this.form.email = response.data.web.email;
                this.form.location = response.data.web.location;
                this.form.fb = response.data.web.fb;
                this.form.insta = response.data.web.in;
                this.form.li = response.data.web.li;
                this.form.tw = response.data.web.tw;
            });
        },
        async update() {
            this.form
                .post("/admin/web/setting/update/" + 1)
                .then((response) => {
                    console.log(response);
                    this.$router.push("/web/setting/" + 1);
                });
        },
    },
    mounted() {
        this.edit();
    },
};
</script>
