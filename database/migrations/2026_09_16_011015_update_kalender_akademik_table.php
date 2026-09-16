public function up()
{
    Schema::table('kalender_akademik', function (Blueprint $table) {

        $table->text('semester_gasal')
            ->nullable();

        $table->text('semester_genap')
            ->nullable();

        $table->integer('urutan')
            ->default(0);

        $table->dropColumn([
            'semester',
            'tanggal_mulai',
            'tanggal_selesai'
        ]);

    });
}