<?php
namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('bookings')->delete();

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102014'],
			[
				'booking_number' => '102014',
				'booking_title' => 'One Day Booking',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(1),
				'booking_end_at' => Carbon::now()->subDays(1)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(1),
				'updated_at' => Carbon::now()->subDays(1),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102015'],
			[
				'booking_number' => '102015',
				'booking_title' => 'Daily Virtual Booking',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(2),
				'booking_end_at' => Carbon::now()->subDays(2)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(2),
				'updated_at' => Carbon::now()->subDays(2),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102016'],
			[
				'booking_number' => '102016',
				'booking_title' => 'Weekly Conference',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(3),
				'booking_end_at' => Carbon::now()->subDays(3)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(3),
				'updated_at' => Carbon::now()->subDays(3),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102017'],
			[
				'booking_number' => '102017',
				'booking_title' => 'Weekly Hospital Routine',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(4),
				'booking_end_at' => Carbon::now()->subDays(4)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(4),
				'updated_at' => Carbon::now()->subDays(4),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102018'],
			[
				'booking_number' => '102018',
				'booking_title' => '',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(5),
				'booking_end_at' => Carbon::now()->subDays(5)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(5),
				'updated_at' => Carbon::now()->subDays(5),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102019'],
			[
				'booking_number' => '102019',
				'booking_title' => null,
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->subDays(6),
				'booking_end_at' => Carbon::now()->subDays(6)->addHours(2),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now()->subDays(6),
				'updated_at' => Carbon::now()->subDays(6),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::table('bookings')->updateOrInsert(
			['booking_number' => '102020'],
			[
				'booking_number' => '102020',
				'booking_title' => 'Monthly Embassy Translations',
				'user_id' => '1',
				'frequency_id' => '1',
				'industry_id' => '1',
				'accommodation_id' => '1',
				'service_category' => '8',
				'physical_address_id' => '284',
				'physical_end_address_id' => '284',
				'phone' => '(865) 320-3296',
				'isCompleted' => '1',
				'service_type' => '1',
				'requester_information' => '1',
				'company_id' => '0',
				'customer_id' => '117',
				'supervisor' => '117',
				'billing_manager_id' => '["117"]',
				'layout' => '1',
				'booking_start_at' => Carbon::now()->addDays(4),
				'booking_end_at' => Carbon::now()->addDays(7),
				'provider_count' => '1',
				'cancel_provider_payment' => '0',
				'duration_hours' => '8',
				'duration_minute' => '0',
				'payment_type' => '2',
				'type' => '1',
				'status' => '1',
				'booking_status' => '1',
				'coupon_id' => '0',
				'billing_address_id' => '284',
				'is_completed' => '0',
				'auto_assign' => '0',
				'auto_notify' => '0',
				'booking_notify' => '[{"exclude_requester_notification":false,"exclude_service_consumer_notification":false,"exclude_participant_notification":false,"exclude_provider_notification":false,"exclude_admin_notification":false}]',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
				'added_by' => '1',
				'updated_by' => '1',
				'invoice_status' => '0',
				'parent_id' => '0',
				'is_recurring' => '0',
				'recurring_start_at' => '2023-01-17',
				'is_from_quote' => '0',
				'return_review' => '0',
				'provider_response' => '',
				'admin_response' => '',
			]
		);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		// $bookings = \App\Booking::all();
		// foreach ($bookings as $booking){
		// 	$booking->update(['isCompleted' => $booking->isBookingCompleted()]);
		// }
	}
}
