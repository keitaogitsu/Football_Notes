<template>
    <div style="text-align: center; width: 80%; margin: 20% auto 0 auto">
        <h3>ログイン</h3>
        <v-form
          ref="form"
          v-model="valid"
          lazy-validation
        >
            <v-text-field 
              v-model="LoginForm.email" 
              auto-complete
              :rules="emailRules"
              label="E-mail"
              requiured
            ></v-text-field>
            <v-text-field 
              type="password" 
              v-model="LoginForm.password" 
              auto-complete
              required
              label="password"
            ></v-text-field>
        </v-form>
            <v-row>
                <v-col :span="8">
                    <v-btn type="warning" @click="login">ログイン</v-btn>
                </v-col>
            </v-row>
    </div>
</template>


<script>
export default {
    name: 'Login',
    data() {
      return {
        LoginForm: {
          email: '',
          password: '',
        },
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',  
        ],
      }
    },
    methods: {
      login() {
        axios.post('/login', this.LoginForm)
          .then(() => {
            this.$router.push({
              path: '/',
            })
          })
          .catch((err) => {
            this.$message({
              type: 'info',
              message: 'ログイン失敗'
            })
          })
      },    }
}
</script>
