import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Card from '@/Components/Cards';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-2xl text-gray-800 leading-tight">Grupo Caletto</h2>}
        >
            <Head title="Grupo Caletto" />

            <div className="py-1">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                        <div className="p-6 text-gray-900">
                          <Card> </Card>
                        </div>
                   
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
