<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'profile_picture' => null,
            'password' => Hash::make('randomPassword'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'profile_picture' => null,
            'password' => Hash::make('randomPassword'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        */

        Post::create([
            'title' => "The Wall of Death: A Rite of Passage",
            'slug' => "test",
            'description' => "There’s something primal about the Wall of Death. When the frontman calls for it, the crowd splits in half like Moses parting the sea. The energy shifts—everything goes quiet for just a second as we size each other up. Then, with the first note of the breakdown, both sides charge forward, slamming into each other like an uncontrolled explosion.

                        I threw myself in, colliding with bodies, limbs flying everywhere. It was brutal, but there was an unspoken rule: if someone went down, hands were there to pick them up. That’s the beauty of the pit—it’s mayhem with respect. When the song ended, I was drenched in sweat, my heart was pounding, and my arms were sore, but I felt more alive than ever. The Wall of Death is not just a pit—it’s a rite of passage.",
            'image_path' => "wall_of_death.jpg",
            'user_id' => 7
        ]);

        Post::create([
            'title' => "Front Row at a Slayer Farewell Show",
            'slug' => "test",
            'description' => "Catching Slayer on their final tour was more than just a concert; it was witnessing the end of an era. From the moment the curtain dropped and “Repentless” kicked in, the energy in the venue was unlike anything I’d ever felt. The entire crowd was a sea of raised horns, fists pumping in unison, as Kerry King’s guitar shredded through the speakers.

                        Then came “Raining Blood.” The moment those opening notes hit, the crowd erupted. The pit transformed into a war zone, bodies crashing against each other like waves in a storm. I screamed every lyric, my voice cracking, but I didn’t care—this was Slayer, and this was my final chance to see them live. When the last note of “Angel of Death” rang out, and Tom Araya stood silently taking in the crowd one last time, I felt a mix of exhaustion, exhilaration, and sadness. This was the end of something legendary, but I was there to witness it.",
            'image_path' => "slayer.jpg",
            'user_id' => 7
        ]);

        Post::create([
            'title' => "A Surprise Mosh Pit in the Balcony",
            'slug' => "test",
            'description' => "When I got balcony seats for a Lamb of God show, I thought I was in the “safe zone.” No pushing, no bruises, just a perfect view of the chaos below. But metalheads don’t always follow the rules.

                        As soon as Randy Blythe roared the first verse of “Redneck,” I felt a shift in the energy around me. A small group nearby started shoving each other, chairs clattering against the floor. At first, security rushed in, but they quickly realized it was a losing battle. The crowd had decided that this balcony would have its own mosh pit, whether the venue liked it or not.

                        I laughed as I watched it unfold, eventually jumping in myself. We crashed into each other, dodging spilled beer and overturned chairs. It wasn’t as wild as the pit on the floor, but it had its own chaotic charm. Sometimes, when the music hits just right, metalheads make their own rules.",
            'image_path' => "mosh_pit.jpg",
            'user_id' => 7
        ]);

        Post::create([
            'title' => "Getting Kicked in the Head by a Crowd Surfer",
            'slug' => "test",
            'description' => 'One moment, I was lost in the intensity of Megadeth’s “Symphony of Destruction.” The next—WHAM! A Doc Marten smashed into the side of my head. A crowd surfer had made his way to the front, and I was too lost in the music to see him coming.

                            For a split second, everything went blurry. Then I just laughed. That’s the thing about metal shows—things get wild, but it’s all part of the experience. The guy who kicked me? He didn’t even realize it, and I had no hard feelings. In fact, I helped push him back up to keep him going.

                            By the time the next song started, I had already shaken it off. If you go to a metal show, you have to be ready for the unexpected—flying bodies included.',
            'image_path' => "crowd_surfer.jpg",
            'user_id' => 7
        ]);

        Post::create([
            'title' => "The Magic of Singing with strangers",
            'slug' => "test",
            'description' => "At an Iron Maiden show, I found myself in the middle of a crowd packed tighter than a sardine can. The guy next to me had his face painted like Eddie, the band’s mascot. The girl in front of me had traveled from another country just to be there. And when the opening notes of “Fear of the Dark” hit, something incredible happened.

The entire crowd—thousands of people—sang along in unison. It wasn’t just a few people near the front; it was everyone. I locked arms with complete strangers, voices merging into one, shouting the lyrics like it was our personal anthem.

That’s what makes metal shows special. It’s not just about the band on stage; it’s about the community, the shared love for the music. For those few minutes, we weren’t strangers—we were a family, bonded by the raw energy of the music.",
            'image_path' => "singing.jpg",
            'user_id' => 8
        ]);

        Post::create([
            'title' => "The Most Brutal Drum Solo Ever",
            'slug' => "test",
            'description' => "I knew Gojira’s Mario Duplantier was a monster behind the kit, but seeing him live? That was a whole different beast. About halfway through their set, the band stepped aside, leaving him alone under a single spotlight.
                            The first strike of the kick drum felt like a shockwave. Then came the machine-gun double kicks, the snare hits like gunfire, the cymbals ringing like church bells in hell. His hands were a blur, moving so fast I could barely track them. The crowd watched in awe, heads banging to the rhythm of his raw power.
                            By the end, the entire venue was shaking—literally. People around me were looking at each other like, “Did we just witness a human or a drum-playing cyborg?” It was easily one of the most brutal, mind-blowing solos I’ve ever seen.",
            'image_path' => "drum_solo.jpg",
            'user_id' => 8
        ]);





        // \App\Models\User::factory(10)->create();
        /*
        Post::create([
            'title' => "Metallica - A Masterclass in Metal",
            'slug' => "test",
            'description' => "If you haven’t seen Metallica live, you haven’t truly felt metal. From the moment Ecstasy of Gold rang out through the arena, a surge of anticipation swept over the crowd like a tidal wave. Then—boom. The first thunderous notes of Whiplash exploded from the speakers, and chaos erupted. 
                                James Hetfield’s signature growl cut through the madness as Kirk Hammett’s solos soared, precise yet wild. The entire arena moved as one, a sea of voices screaming along to Master of Puppets, fists raised in defiance. Then came Nothing Else Matters, a rare, almost tender moment, as thousands swayed, lost in its melody. But the true highlight? One. The strobe lights flickered, the gunfire-like drums hammered away, and for a few minutes, it felt like we were on a battlefield.
                            By the time the final chords of Seek & Destroy rang out, I was drained, my voice hoarse, my body aching—but I knew I had just witnessed something legendary. Metallica isn’t just a band; they’re an institution.",
            'image_path' => "metallica.jpeg",
            'user_id' => 1
        ]);


        Post::create([
            'title' => "Tool - A Trippy, Mindbending Journey",
            'slug' => "test",
            'description' => "A Tool concert isn’t about spectacle—it’s about immersion. No pyrotechnics, no hype speeches. Just music that swallows you whole.
                            As Fear Inoculum began, a slow, creeping pulse took hold. Maynard James Keenan remained a shadowy figure, never seeking the spotlight, his voice haunting and hypnotic. Danny Carey’s drumming wasn’t just rhythm—it was ritual, shifting time signatures like the earth cracking beneath our feet. Schism and Forty-Six & 2 felt like living, breathing organisms, expanding and contracting with the energy of the crowd.
                            Then came Lateralus. A sonic transcendence. The visuals behind the band weren’t just lights—they were portals, pulling us into some deeper, hidden dimension. And when Stinkfist closed the night, it felt less like an ending and more like waking up from a lucid dream.
                            Tool doesn’t put on concerts. They conduct experiments on your consciousness. And I was more than willing to be the test subject.",
            'image_path' => "tool.jpeg",
            'user_id' => 1
        ]);

        

        Post::create([
            'title' => "Iron Maiden: A Metal Opera Like No Other ",
            'slug' => 'test',
            'description' => 'Seeing Iron Maiden live isn’t just a concert—it’s a journey through time and legend. The moment Aces High roared through the speakers, a fighter plane swooped onto the stage, and Bruce Dickinson charged forward like a warrior, belting out vocals with impossible power.
                                The crowd was a sea of Maiden shirts, fists raised, chanting every lyric like it was gospel. Steve Harris’ galloping basslines drove The Trooper like a battle cry, while Fear of the Dark had the entire arena singing in eerie unison. And then there was Eddie—the colossal, snarling beast, towering over the band, changing forms throughout the set like some kind of metal shapeshifter.
                                When the final notes of The Number of the Beast rang out, I realized Iron Maiden isn’t just a band—they’re mythmakers, masters of spectacle, and architects of metal’s greatest anthems. If you haven’t seen them live, you haven’t truly lived.',
        
            'image_path' => 'maiden.jpg',
            'user_id' => 1
        ]);
        */
    }
}
