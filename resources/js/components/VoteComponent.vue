<template>
    <div class="upvotejs">
        <a  class="upvote"
            :class = "{'upvote-on' : isUpvoteOn}"
            @click="onClickUpvote">
        </a>

        <span class="count">
            {{votes}}
        </span>

        <a  class="downvote"
            :class = "{'downvote-on' : isDownvoteOn}"
            @click="onClickDownvote"></a>

        <a  class="star"
            :class = "{'star-on' : isStarOn}"
            @click="onClickStar">
        </a>
        <!-- <input v-model="name">
        {{name}}
        <button @click ="submitForm"> Axios try </button> -->
    </div>
</template>

<script>
    export default {
        props: {
            voteCount: String,
            upvoteOn: Boolean,
            downvoteOn: Boolean,
            starOn: Boolean,
            questionId: String
        },
        data() {
            return {
                name: 'mubashar',
                description:'hello world',
                votes : Number(this.voteCount),
                isUpvoteOn : this.upvoteOn,
                isDownvoteOn : this.downvoteOn,
                isStarOn: this.starOn
            }
        },
        methods : {
            onClickStar() {
                this.isStarOn = !this.isStarOn
            },
            onClickDownvote() {
                this.isDownvoteOn = !this.isDownvoteOn          // Assignment is still pending to implement the logic
                this.votes = this.votes - 1
                this.requestForVotedown()
            },

          onClickUpvote() {
                this.isUpvoteOn = !this.isUpvoteOn              // assigment here too
                this.votes = this.votes + 1
                this.requestForVoteup()

            },

            requestForVoteup() {
                axios.post(this.questionId + '/upvote', {

                })
                .then(function (response) {
                    console.log('form is submitted')
                    console.log( response.data)
                })
                .catch(function (error) {
                    console.log(error);
                });;
            },

            requestForVotedown() {
                axios.post(this.questionId + '/downvote', {

                })
                .then(function (response) {
                    console.log('form is submitted')
                    console.log( response.data)
                })
                .catch(function (error) {
                    console.log(error);
                });;
            }

        },
        mounted() {
            console.log('Component mounted.')

        }

    }
</script>
