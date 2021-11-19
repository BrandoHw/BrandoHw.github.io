
<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <div class="content">
        
                <v-expansion-panels
                   v-for="project in projects" :key="project.id">
                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            {{project.title}}
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            {{project.content}}
                            <div class=row>
                                <div class="col-md-6 col-12">
                                    <blockquote>
                                        <p></p>
                                    </blockquote>
                                </div>
                                <div class="col-md-6 col-12">

                                    <v-dialog
                                        v-model="dialog"
                                        width="500"
                                    >
                                        <template v-slot:activator="{ on, attrs }">
                                  
                                            <v-carousel height="350px">
                                                <v-carousel-item
                                                    v-for="c in image_slides[project.id]"
                                                    :key="c"
                                                    :src="c"
                                                    v-bind="attrs"
                                                    v-on="on"
                                                >
                                                </v-carousel-item>
                                            </v-carousel>
                                        </template>
                                
                                        <v-card>
                                        <v-card-title class="text-h5 grey lighten-2">
                                            Privacy Policy
                                        </v-card-title>
                                
                                           <v-carousel height="350px">
                                                <v-carousel-item
                                                    v-for="c in image_slides[project.id]"
                                                    :key="c"
                                                    :src="c"
                                                >
                                                </v-carousel-item>
                                            </v-carousel>
                                
                                        <v-divider></v-divider>
                                
                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn
                                            color="primary"
                                            text
                                            @click="dialog = false"
                                            >
                                            I accept
                                            </v-btn>
                                        </v-card-actions>
                                        </v-card>
                                    </v-dialog>
                                </div>
                            </div>
                         </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </div>
        </div>
     
    </v-main>
</v-app>

</template>

<script>
import Layout from '@/Pages/Layout/Layout';
export default {
    layout: Layout,
    props: [
        'carousel_images'
    ],
    methods: {
        testFunction: function (event) {
        }
    },
    data(){
     return{
        image_slides: this.carousel_images,
        dialog: false,
        projects: [
            { 
                id: 'wecare',
                title: "WeCare - St. John's Home For Elderly Persons",
                content: "stuff"
            },
            { 
                id: 'boingtech',
                title: 'SmartFactory - BoingTech',
                content: "moar stuf"
            }
        ],
     }
    }
}
</script>